<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

add_action( 'after_setup_theme', 'senavitat_setup' );
	
function senavitat_setup() {
	add_image_size('slider_thumb',2597,1732, true);
	add_image_size('noticia_thumb',750,317, true);		
	add_image_size('bloquecitos_thumb',100,100, true);	
	add_image_size('programas_thumb',169, 89, true);
	add_image_size('directorio_thumb',55, 55, true);
	add_theme_support('post-thumbnails', array( 'post', 'page', 'programas', 'contrataciones', 'multimedia', 'documentos', 'publicaciones', 'directorio') );
	
	register_nav_menu( 'primary', 'Menu que va en el header' );
	register_nav_menu( 'atencion', 'Menu que va en el sidebar' );
	register_nav_menu( 'listados', 'Menu que va en el sidebar 2' );

	register_sidebar( array(
    'id'          => 'lateral1',
    'name'        => __( 'Area Lateral', $text_domain ),
    'description' => __( 'Area lateral superior', $text_domain ),
	) );

	register_sidebar( array(
    'id'          => 'lateral2',
    'name'        => __( 'Area Lateral', $text_domain ),
    'description' => __( 'Area lateral inferior', $text_domain ),
	) );

	register_sidebar( array(
    'id'          => 'mapasitio',
    'name'        => __( 'Area de mapa de sitio', $text_domain ),
    'description' => __( 'Area de mapa de sitio', $text_domain ),
	) );

	register_sidebar( array(
		'id'          => 'banner',
		'name'        => __( 'Area de banner', $text_domain ),
		'description' => __( 'Area de banner acceso directos', $text_domain ),
		) );

}

register_sidebar( array(
	'id'          => 'categ',
	'name'        => __( 'Area de categorias de noticias', $text_domain ),
	'description' => __( 'Area de categorias de noticias', $text_domain ),
	) );






add_filter( 'init', 'senavitat_init', 9 );

function senavitat_init()
{
	add_filter( 'show_admin_bar', '__return_false' );
}



/*  --------------------------------------------------- Customizable logo  ------------------------------------------------------ */

wp_enqueue_style ('muvh-style', get_stylesheet_uri ()); 
wp_enqueue_style ('fuentes-style', get_template_directory_uri (). '/fuentes.css');
 
 wp_enqueue_style('bootstrap',get_template_directory_uri().'css/bootstrap.css');

wp_enqueue_style ('custom-style', get_template_directory_uri (). '/css/showcase.css'); 

wp_enqueue_style ('custom-style', get_template_directory_uri (). '/fonts/fonts.css'); 




add_filter('use_block_editor_for_post', '__return_false');



		

/* ------------------------------------------------ filtro que muestra tama�o large en galeria-----------------------------------------------------------------*/
function oikos_get_attachment_link_filter( $content, $post_id, $size, $permalink ) {
 
    // Only do this if we're getting the file URL
    if (! $permalink) {
        // This returns an array of (url, width, height)
        $image = wp_get_attachment_image_src( $post_id, 'large' );
        $new_content = preg_replace('/href=\'(.*?)\'/', 'href=\'' . $image[0] . '\'', $content );
        return $new_content;
    } else {
        return $content;
    }
}
 
add_filter('wp_get_attachment_link', 'oikos_get_attachment_link_filter', 10, 4);



function mis_posts(){

	/*  ###########################################################  Definicion de programas habitacionales ##################################################   */
    $labels = array(
		'name' => _x('Programas', ''),
		'singular_name' => _x('programas', ''),
		'add_new' => _x('Agregar', ''),
		'add_new_item' => __('Agregar programa'),
		'edit_item' => __('Editar programas'),
		'new_item' => __('Nuevo programas'),
		'view_item' => __('Ver programas'),
		'search_items' => __('Buscar programas'),
		'not_found' =>  __('Seccion en construcci&oacute;n'),
		'not_found_in_trash' => __('No hay programa en papelera'),
		'parent_item_colon' => '',
		'menu_name' => 'Programas'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'programas'),
		'map_meta_cap' => true,
		'capability_type' => array('programa', 'programas'),
		'has_archive' => true,
		'menu_icon' => get_bloginfo('template_directory') . '/images/programas.png',
		'hierarchical' => false,
		'menu_position' => 4,
		'supports' => array('title','thumbnail','editor','excerpt','comments')
	);
	register_post_type('programas',$args);
        flush_rewrite_rules();

/*  ###########################################################  Definicion de contrataciones ##################################################   */

    $labels = array(
		'name' => _x('Contrataciones', ''),
		'singular_name' => _x('contrataciones', ''),
		'add_new' => _x('Agregar', ''),
		'add_new_item' => __('Agregar contratación'),
		'edit_item' => __('Editar contrataciones'),
		'new_item' => __('Nueva contratación'),
		'view_item' => __('Ver contrataciones'),
		'search_items' => __('Buscar contrataciones'),
		'not_found' =>  __('Seccion en construcci&oacute;n'),
		'not_found_in_trash' => __('No hay contratacion en papelera'),
		'parent_item_colon' => '',
		'menu_name' => 'Contrataciones'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'contrataciones'),
		'map_meta_cap' => true,
		'capability_type' => array('contratacion', 'contrataciones'),
		'has_archive' => true,
		'menu_icon' => get_bloginfo('template_directory') . '/images/contrataciones.png',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','thumbnail','editor','excerpt','comments')
	);
	register_post_type('contrataciones',$args);
        flush_rewrite_rules();

 /*  ###################################################################  Multimedia #############################################################   */


    $labels = array(
		'name' => _x('Multimedia', ''),
		'singular_name' => _x('multimedia', ''),
		'add_new' => _x('Agregar', ''),
		'add_new_item' => __('Agregar multimedia'),
		'edit_item' => __('Editar multimedia'),
		'new_item' => __('Nuevo multimedia'),
		'view_item' => __('Ver multimedia'),
		'search_items' => __('Buscar multimedia'),
		'not_found' =>  __('Seccion en construcci&oacute;n'),
		'not_found_in_trash' => __('No hay multimedia en papelera'),
		'parent_item_colon' => '',
		'menu_name' => 'Multimedia'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'multimedia'),
		'map_meta_cap' => true,
		'capability_type' => array('multimedia', 'multimedias'),
		'has_archive' => true,
		'menu_icon' => get_bloginfo('template_directory') . '/images/multimedia.png',
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array('title','thumbnail','editor','excerpt','comments', 'custom-fields')
	);
	register_post_type('multimedia',$args);
        flush_rewrite_rules();


/*  ###########################################################  Definicion de documentos ##################################################   */
    $labels = array(
		'name' => _x('Documentos', ''),
		'singular_name' => _x('documentos', ''),
		'add_new' => _x('Agregar', ''),
		'add_new_item' => __('Agregar documento'),
		'edit_item' => __('Editar documentos'),
		'new_item' => __('Nuevo documentos'),
		'view_item' => __('Ver documentos'),
		'search_items' => __('Buscar documentos'),
		'not_found' =>  __('Seccion en construcci&oacute;n'),
		'not_found_in_trash' => __('No hay documento en papelera'),
		'parent_item_colon' => '',
		'menu_name' => 'Documentos'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'documentos'),
		'map_meta_cap' => true,
		'capability_type' => array('documento', 'documentos'),
		'has_archive' => true,
		'menu_icon' => get_bloginfo('template_directory') . '/images/documentos.png',
		'hierarchical' => true,
		'menu_position' => 7,
		'supports' => array('title','thumbnail','editor','excerpt','comments','page-attributes')
	);
	register_post_type('documentos',$args);
        flush_rewrite_rules();


/*  ###########################################################  Definicion de publicaciones ##################################################   */
    $labels = array(
		'name' => _x('Publicaciones', ''),
		'singular_name' => _x('publicaciones', ''),
		'add_new' => _x('Agregar', ''),
		'add_new_item' => __('Agregar publicacion'),
		'edit_item' => __('Editar publicaciones'),
		'new_item' => __('Nuevo publicaciones'),
		'view_item' => __('Ver publicaciones'),
		'search_items' => __('Buscar publicaciones'),
		'not_found' =>  __('Seccion en construcci&oacute;n'),
		'not_found_in_trash' => __('No hay documento en papelera'),
		'parent_item_colon' => '',
		'menu_name' => 'Publicaciones',
		'show_in_rest'  => true,

	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'publicaciones'),
		'map_meta_cap' => true,
		'capability_type' => array('publicacion', 'publicaciones'),
		'has_archive' => true,
		
		'hierarchical' => true,
		'menu_position' => 8,
		'supports' => array('title','thumbnail','editor','excerpt','comments','page-attributes')
	);
	register_post_type('publicaciones',$args);
        flush_rewrite_rules();

/*  ###########################################################  Definicion de directorio ##################################################   */
    $labels = array(
		'name' => _x('Directorio', ''),
		'singular_name' => _x('directorio', ''),
		'add_new' => _x('Agregar', ''),
		'add_new_item' => __('Agregar miembro'),
		'edit_item' => __('Editar miembro'),
		'new_item' => __('Nuevo miembro'),
		'view_item' => __('Ver directorio'),
		'search_items' => __('Buscar directorio'),
		'orderby' => 'date',
		'order' => 'ASC',
		'menu_order'=>'DESC',
		'not_found' =>  __('Seccion en construcci&oacute;n'),
		'not_found_in_trash' => __('No hay documento en papelera'),
		'parent_item_colon' => '',
		'menu_name' => 'Directorio'
		
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'directorio'),
		'map_meta_cap' => true,
		'capability_type' => array('miembro', 'miembros'),
		'has_archive' => true,
		'menu_icon' => get_bloginfo('template_directory') . '/images/xfn-colleague-met.png',
		'hierarchical' => false,
		'menu_position' => 8,
		
		'supports' => array('title','thumbnail','editor','excerpt','comments')
	);
	register_post_type('directorio',$args);
	
        flush_rewrite_rules();

 /*  ###########################################################  Direcciones Generales ##################################################   */
    $labels = array(
		'name' => _x('Dirección General', ''),
		'singular_name' => _x('direccion', ''),
		'add_new' => _x('Agregar', ''),
		'add_new_item' => __('Agregar direccion'),
		'edit_item' => __('Editar direccion'),
		'new_item' => __('Nuevo direccion'),
		'view_item' => __('Ver direccion'),
		'search_items' => __('Buscar direccion'),
		'not_found' =>  __('Seccion en construcci&oacute;n'),
		'not_found_in_trash' => __('No hay documento en papelera'),
		'parent_item_colon' => '',
		'menu_name' => 'Direcciones Generales'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'direccion'),
		'map_meta_cap' => true,
		'capability_type' => array('direccion', 'direcciones'),
		'has_archive' => true,
		//'menu_icon' => get_bloginfo('template_directory') . '/images/xfn-colleague-met.png',
		'hierarchical' => true,
		'menu_position' => 8,
		'supports' => array('title','thumbnail','editor','excerpt','comments')
	);
	register_post_type('direccion',$args);
        flush_rewrite_rules();


     /*  ###########################################################  Regionales ##################################################   */
    $labels = array(
		'name' => _x('Regional', ''),
		'singular_name' => _x('regional', ''),
		'add_new' => _x('Agregar', ''),
		'add_new_item' => __('Agregar regional'),
		'edit_item' => __('Editar regional'),
		'new_item' => __('Nuevo regional'),
		'view_item' => __('Ver regional'),
		'search_items' => __('Buscar regional'),
		'not_found' =>  __('Seccion en construcci&oacute;n'),
		'not_found_in_trash' => __('No hay documento en papelera'),
		'parent_item_colon' => '',
		'menu_name' => 'Regionales'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'regional'),
		'map_meta_cap' => true,
		'capability_type' => array('regional', 'regionales'),
		'has_archive' => true,
		//'menu_icon' => get_bloginfo('template_directory') . '/images/xfn-colleague-met.png',
		'hierarchical' => false,
		'menu_position' => 8,
		'supports' => array('title','thumbnail','editor','excerpt','comments')
	);
	register_post_type('regional',$args);
        flush_rewrite_rules();


     /*  ###########################################################  Leyes ##################################################   */
    $labels = array(
		'name' => _x('Leyes', ''),
		'singular_name' => _x('leye', ''),
		'add_new' => _x('Agregar', ''),
		'add_new_item' => __('Agregar ley'),
		'edit_item' => __('Editar ley'),
		'new_item' => __('Nueva ley'),
		'view_item' => __('Ver ley'),
		'search_items' => __('Buscar leyes'),
		'not_found' =>  __('Seccion en construcci&oacute;n'),
		'not_found_in_trash' => __('No hay documento en papelera'),
		'parent_item_colon' => '',
		'menu_name' => 'Leyes'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'leyes'),
		'map_meta_cap' => true,
		'capability_type' => array('ley', 'leyes'),
		'has_archive' => true,
		//'menu_icon' => get_bloginfo('template_directory') . '/images/xfn-colleague-met.png',
		'hierarchical' => false,
		'menu_position' => 8,
		'supports' => array('title','thumbnail','editor','excerpt','comments')
	);
	register_post_type('leyes',$args);
        flush_rewrite_rules();


    /*  ###########################################################  Decretos ##################################################   */
    $labels = array(
		'name' => _x('Decretos', ''),
		'singular_name' => _x('decreto', ''),
		'add_new' => _x('Agregar', ''),
		'add_new_item' => __('Agregar decreto'),
		'edit_item' => __('Editar decreto'),
		'new_item' => __('Nueva decreto'),
		'view_item' => __('Ver decreto'),
		'search_items' => __('Buscar decretos'),
		'not_found' =>  __('Seccion en construcci&oacute;n'),
		'not_found_in_trash' => __('No hay documento en papelera'),
		'parent_item_colon' => '',
		'menu_name' => 'Decretos'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'decretos'),
		'map_meta_cap' => true,
		'capability_type' => array('decreto', 'decretos'),
		'has_archive' => true,
		//'menu_icon' => get_bloginfo('template_directory') . '/images/xfn-colleague-met.png',
		'hierarchical' => false,
		'menu_position' => 8,
		'supports' => array('title','thumbnail','editor','excerpt','comments')
	);
	register_post_type('decretos',$args);
        flush_rewrite_rules();


    /*  ###########################################################  Resolucions ##################################################   */
    $labels = array(
		'name' => _x('Resoluciones', ''),
		'singular_name' => _x('resolucion', ''),
		'add_new' => _x('Agregar', ''),
		'add_new_item' => __('Agregar resolucion'),
		'edit_item' => __('Editar resolucion'),
		'new_item' => __('Nueva resolucion'),
		'view_item' => __('Ver resolucion'),
		'search_items' => __('Buscar resoluciones'),
		'not_found' =>  __('Seccion en construcci&oacute;n'),
		'not_found_in_trash' => __('No hay documento en papelera'),
		'parent_item_colon' => '',
		'menu_name' => 'Resoluciones'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'resoluciones'),
		'map_meta_cap' => true,
		'capability_type' => array('resolucion', 'resoluciones'),
		'has_archive' => true,
		//'menu_icon' => get_bloginfo('template_directory') . '/images/xfn-colleague-met.png',
		'hierarchical' => false,
		'menu_position' => 8,
		'supports' => array('title','thumbnail','editor','excerpt','comments')
	);
	register_post_type('resoluciones',$args);
        flush_rewrite_rules();

	
	
}
add_action('init','mis_posts',0); 


function mis_taxonomias(){
	register_taxonomy(
		'tipomultimedia',
		'multimedia',
		array(
			'label' => 'Tipo Multimedia',
			'hierarchical' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'tipoinfo', 'with_front' => false )
			
		)
	);
	flush_rewrite_rules();


	
	register_taxonomy(
		'tiporesolucion',
		'resoluciones',
		array(
			'label' => 'Categoria Resoluciones',
			'hierarchical' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'tiporesolucion', 'with_front' => false )
		)
	);
	flush_rewrite_rules();

	register_taxonomy(
		'portada',
		'post',
		array(
			'label' => 'Portada',
			'hierarchical' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'portada', 'with_front' => false )
		)
	);
	flush_rewrite_rules();
	
}
add_action('init','mis_taxonomias',0);

/*  ###########################################################  Definicion de Avance de OBRAS ##################################################   */

$labels = array(
	'name' => _x('Avances de Obras', ''),
	'singular_name' => _x('Avances de Obras', ''),
	'add_new' => _x('Agregar', ''),
	'add_new_item' => __('Agregar Avance '),
	'edit_item' => __('Editar '),
	'new_item' => __('Nuevo Avance de Obra'),
	'view_item' => __('Ver Avance de Obras'),
	'search_items' => __('Buscar Avance de Obra'),
	'not_found' =>  __('Seccion en construcci&oacute;n'),
	'not_found_in_trash' => __('No hay contratacion en papelera'),
	'parent_item_colon' => '',
	'menu_name' => 'Avance de Obras'
);
$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'Avance de Obras'),
	'map_meta_cap' => true,
	'capability_type' => array('Avance de Obra', 'Avance de Obras'),
	'has_archive' => true,
	'menu_icon' => get_bloginfo('template_directory') . '/images/contrataciones.png',
	'hierarchical' => false,
	'menu_position' => 5,
	'supports' => array('title','thumbnail','editor','excerpt','comments')
);
register_post_type('avances de obras',$args);
	flush_rewrite_rules();


// cambia las etiquetas de posts y entradas a

function change_post_menu_label() {
    global $menu;
    //echo var_dump($menu);
    global $submenu;
    $menu[5][0] = 'Noticias';
    $submenu['edit.php'][5][0] = 'Todas las Noticias';
    $submenu['edit.php'][10][0] = 'Nueva Noticia';
    $submenu['edit.php'][15][0] = 'Categorias'; // Change name for categories
    $submenu['edit.php'][16][0] = 'Palabras clave'; // Change name for tags
    echo '';
}

function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Todos las Noticias';
        $labels->singular_name = 'Noticia';
        $labels->add_new = 'Agregar Noticia';
        $labels->add_new_item = 'Agregar Noticia';
        $labels->edit_item = 'Editar Noticia';
        $labels->new_item = 'Noticia';
        $labels->view_item = 'Ver Noticia';
        $labels->search_items = 'Buscar Noticias';
        $labels->not_found = 'Noticia no encontrada';
        $labels->not_found_in_trash = 'No hay Noticia en la papelera';
    }
    add_action( 'init', 'change_post_object_label' );
    add_action( 'admin_menu', 'change_post_menu_label' );






/*  ###########################################################  Remueve las cajitas del escritorio ##################################################   */


function example_dashboard_widget_function() {
    // Display whatever it is you want to show
    echo '<div align="center"><img src="'.get_bloginfo('template_directory').'/images/logosenavitat.jpg" /></div>';
    ?>
  	<p style="font-size:24px; line-height: 1.3em;">Bienvenido al panel de administración de MUVH, 
  		puede navegar el menu lateral para administrar el contenido de su sitio</p>
 <?php
}

// Create the function use in the action hook
function example_add_dashboard_widgets() {
    wp_add_dashboard_widget('example_dashboard_widget', 'Bienvenida', 'example_dashboard_widget_function');
}
// Hoook into the 'wp_dashboard_setup' action to register our other functions
add_action('wp_dashboard_setup', 'example_add_dashboard_widgets' );

// Create the function to use in the action hook
function senavitat_remove_dashboard_widgets() {
    // Globalize the metaboxes array, this holds all the widgets for wp-admin

    global $wp_meta_boxes;

    // Remove the incomming links widget
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );

}

// Hoook into the 'wp_dashboard_setup' action to register our function
add_action('wp_dashboard_setup', 'senavitat_remove_dashboard_widgets' );

function get_current_user_role() {
    global $current_user;
    return array_shift($current_user->roles);
}



function remove_menus()
{
    global $menu;
   // var_dump($menu);
    global $current_user;
    get_currentuserinfo();
 	$urole = get_current_user_role();
    /*if($current_user->user_login != 'jveron' )*/
    if($urole == "prensa")
    {
        $restricted = array(
                            
                            __('Comments'),
                            __('Tools'),
                            __('Media')
        );
        end ($menu);
        while (prev($menu)){
            $value = explode(' ',$menu[key($menu)][0]);
            if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
        }// end while
        unset($menu[26]); //remove menu contacto
     /*   unset($menu[100]); //remove menu seguridad*/
 		
 		
    }// end if
}
add_action('admin_menu', 'remove_menus');




/* ################################################################### filtro de excerpt  ########################################################################### */


function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



function custom_login_logo() {
    echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/logo.jpg) 50% 50% no-repeat !important; }</style>';
}
add_action('login_head', 'custom_login_logo');
add_filter( 'get_shortlink', function( $shortlink ) {return $shortlink;} );




?>
