<?php


function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}

function get_logo()
{
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    echo $image[0];
}

add_filter('nav_menu_css_class', 'so_37823371_menu_item_class', 10, 4);

function so_37823371_menu_item_class($classes, $item, $args, $depth)
{
    $classes[] = 'nav-item';
    if (in_array('menu-item-has-children', $classes)) {
        // dd($item);
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3);

function wpse156165_menu_add_class($classes, $item, $args)
{
    $classes['class'] = 'nav-link';
    return $classes;
}

function new_submenu_class($menu)
{
    $menu = preg_replace('/ class="sub-menu"/', '/ class="dropdown-menu" /', $menu);
    return $menu;
}

add_filter('wp_nav_menu', 'new_submenu_class');

add_filter('walker_nav_menu_start_el', 'add_arrow', 10, 4);
function add_arrow($output, $item, $depth, $args)
{
    if (in_array("menu-item-has-children", $item->classes)) {
        $output = str_replace("</a>", " <i class=\"bx bx-chevron-down\"></i></a>", $output);
    }
    return $output;
}

function image($width = 200, $height = 200)
{
    return resize_image(get_the_post_thumbnail_url(), [$width, $height]);
}

function resize_image($url, $size = [])
{
    $media_url = str_replace(home_url('wp-content/uploads') . '/', '', $url);
    if (!isset($size[0]) || !isset($size[1])) {
        return home_url('wp-content/uploads/') . $media_url;
    }
    $img_url = home_url('wp-content/uploads/vthumb.php?src=' . $media_url . '&size=' . $size[0] . 'x' . $size[1] . '&zoom=1&q=90');
    return $img_url;
}
function getPaginate($qr)
{
    $current_page = max(1, get_query_var('paged'));
    $pagin = paginate_links([
        'total' => $qr->max_num_pages,
        'format' => '?paged=%#%',
        'type' => 'array',
        'prev_text' => "<i class='bx bx-chevron-left'></i>",
        'next_text' => "<i class='bx bx-chevron-right'></i>",
        'current' => $current_page,
        'show_all' => true
    ]);
    $list = $pagin;
    $html = '';

    if ($qr->max_num_pages > 1) {
        $html .= '<div class="pagination-area">';
        if ($current_page > 1) {
            $html .= $list[0];
        }
        $html .= '<ul class="pagination">';

        if ($current_page == $qr->max_num_pages) {
            array_shift($pagin);
        } elseif ($current_page == 1) {
            array_pop($pagin);
        } else {
            array_pop($pagin);
            array_shift($pagin);
        }


        foreach ($pagin as $k => $p) {

            $link = new SimpleXMLElement($p);
            $checked = ($current_page == $k + 1) ? "active" : "";
            $html .= "<li class='" . $checked . "'>";
            $html .= $p;
            $html .= "</li>";
        }
        $html .= '</ul>';

        if ($current_page < $qr->max_num_pages) {
            //$html.= end($list);
        }
        $html .= '</div>';
    }
    echo $html;
}
function remove_page_from_query_string($query_string)
{
    if ($query_string['name'] == 'page' && isset($query_string['page'])) {
        unset($query_string['name']);
        $query_string['paged'] = $query_string['page'];
    }
    return $query_string;
}
add_filter('request', 'remove_page_from_query_string');