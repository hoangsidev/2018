<?php
add_action( 'init', 'register_my_cpts' );
function register_my_cpts() {
	$labels = array(
		"name" => "Sản phẩm",
		"singular_name" => "Sản phẩm",
		"menu_name" => "Sản phẩm",
		"all_items" => "Tất cả sản phẩm",
		"add_new" => "Thêm mới",
		"add_new_item" => "Thêm mới sản phẩm",
		"edit" => "Sửa",
		"edit_item" => "Sửa sản phẩm",
		"new_item" => "Sản phẩm mới",
		"view" => "Hiển thị",
		"view_item" => "Hiển thị sản phẩm",
		"search_items" => "Tìm kiếm sản phẩm",
		"not_found" => "Không tìm thấy sản phẩm",
		"not_found_in_trash" => "Không tìm thấy sản phẩm trong thùng rác",
		"parent" => "Sản phẩm cha",
		);
	$args = array(
		"labels" => $labels,
		"description" => "Custom post type Sản phẩm",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "san-pham", "with_front" => true ),
        "supports" =>array(
            'title',
            'editor',
            
            'thumbnail',
            'comments',
           
            'custom-fields'),
		"query_var" => true,
		"menu_position" => 4,
		"menu_icon" => "dashicons-cart",				
		"taxonomies" => array( "tu-khoa", "danh-muc-san-pham" )
	);
	register_post_type( "san-pham", $args );
// End of register_my_cpts()
}
 
// Register Taxonomies
add_action( 'init', 'register_my_taxes' );
function register_my_taxes() {
	$labels = array(
		"name" => "Danh mục sản phẩm",
		"label" => "Danh mục sản phẩm",
		"menu_name" => "Danh mục",
		"all_items" => "Tất cả danh mục",
		"edit_item" => "Chỉnh sửa danh mục",
		"view_item" => "Hiển thị danh mục",
		"update_item" => "Cập nhật tên danh mục",
		"add_new_item" => "Thêm mới danh mục",
		"new_item_name" => "Tên danh mục mới",
		"parent_item" => "Danh mục cha",
		"parent_item_colon" => "Danh mục cha:",
		"search_items" => "Tìm kiếm danh mục",
		"popular_items" => "Danh mục phổ biến",
		"separate_items_with_commas" => "Ngăn cách chuyên mục bằng dấu phẩy",
		"add_or_remove_items" => "Thêm hoặc xóa danh mục",
		"choose_from_most_used" => "Chọn danh mục được sử dụng nhiều nhất",
		"not_found" => "Không tìm thấy danh mục",
		);
	$args = array(
		"labels" => $labels,
		"hierarchical" => true,
		"label" => "Danh mục sản phẩm",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'danh-muc-san-pham', 'with_front' => true ),
		"show_admin_column" => true,
	);
	register_taxonomy( "danh-muc-san-pham", array( "san-pham" ), $args );
	
	$labels = array(
		"name" => "Từ khóa sản phẩm",
		"label" => "Từ khóa sản phẩm",
		"menu_name" => "Từ khóa",
		"all_items" => "Tất cả Từ khóa",
		"edit_item" => "Chỉnh sửa Từ khóa",
		"view_item" => "Hiển thị Từ khóa",
		"update_item" => "Cập nhật tên Từ khóa",
		"add_new_item" => "Thêm Từ khóa mới",
		"new_item_name" => "Tên Từ khóa mới",
		"parent_item" => "Từ khóa cha",
		"parent_item_colon" => "Từ khóa cha:",
		"search_items" => "Tìm kiếm Từ khóa",
		"popular_items" => "Từ khóa phổ biến",
		"separate_items_with_commas" => "Ngăn cách Từ khóa bằng dấu phẩy",
		"add_or_remove_items" => "Thêm hoặc xóa Từ khóa",
		"choose_from_most_used" => "Chọn Từ khóa được sử dụng nhiều nhất",
		"not_found" => "Không tìm thấy Từ khóa",
		);
	$args = array(
		"labels" => $labels,
		"hierarchical" => false,
		"label" => "Từ khóa sản phẩm",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'tu-khoa', 'with_front' => true ),
		"show_admin_column" => true,
	);
	register_taxonomy( "tu-khoa", array( "san-pham" ), $args );
}