<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */

    
    //страница "главная"
  $home_page_prokat = array(
    'id'          => 'home_page_prokat',
    'title'       => 'Настройки главной страницы',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(


         array(
        'label'       => 'Настройка слайдера',
        'id'          => 'slider_list_top_tab',
        'type'        => 'tab'
      ),

               array(
        'id'          => 'slider_list_top',
        'label'       => 'Добавить слайд',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'slider_list_top_text',
        'label'       => 'Текст слайда',
        'desc'        => '',
        'type'        => 'textarea',
      ), 
            array(
        'id'          => 'slider_list_top_upload',
        'label'       => 'Картинка слайда',
        'desc'        => '',
        'type'        => 'upload',
      ), 

         ),
    
            ),

               array(
        'label'       => 'Настройка блока Галерея работ',
        'id'          => 'galeri_photo_tab',
        'type'        => 'tab'
      ),
               array(
        'id'          => 'galeri_photo_name_block',
        'label'       => 'Название блока',
        'desc'        => 'Например:Галерея работ',
        'type'        => 'text',
      ), 

               array(
        'id'          => 'galeri_photo_block_desk',
        'label'       => 'Краткое описание блока',
        'desc'        => '',
        'type'        => 'textarea',
      ),

               array(
        'id'          => 'galeri_categori_photo_list_upload',
        'label'       => 'Добавить категорию',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'galeri_categori_photo_block_upload',
        'label'       => 'Название категории',
        'desc'        => '',
        'type'        => 'text',
      ),  

         ),
    
            ),

              array(
        'id'          => 'galeri_photo_list_upload',
        'label'       => 'Настройки блока с фото',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
          array(
        'id'          => 'addClass_galeri_categori',
        'label'       => 'Добавить параметор data-filter',
        'desc'        => '',
        'type'        => 'text',
      ), 
          array(
        'id'          => 'galeri_categori_name_client',
        'label'       => 'Название проекта',
        'desc'        => '',
        'type'        => 'text',
      ),
            array(
        'id'          => 'galeri_categori_images',
        'label'       => 'Загрузите картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),  

         ),
    
            ),



 array(
        'label'       => 'Настройка блока как мы убираем',
        'id'          => 'setings_block_clining_tab',
        'type'        => 'tab'
      ),

 array(
        'id'          => 'name_block_clining',
        'label'       => 'Название блока',
        'desc'        => 'Укажите название блока, например: Как мы убираем',
        'type'        => 'text',
      ), 

 array(
        'id'          => 'upload_block_clining',
        'label'       => 'Загрузите фон блока',
        'desc'        => '',
        'type'        => 'upload',
      ), 


array(
        'id'          => 'add_block_prioritet',
        'label'       => 'Добавить блок как мы работаем ',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'icon_font_add_block_prioritet',
        'label'       => 'Добавить иконку блока',
        'desc'        => 'Весь перечень иконок <a href="https://fontawesome.ru/all-icons/">тут</a>',
        'type'        => 'text',
      ), 
             array(
        'id'          => 'name_servises_list_add_block_prioritet',
        'label'       => 'Название блока',
        'desc'        => '',
        'type'        => 'text',
      ), 
              array(
        'id'          => 'deck_servises_list_add_block_prioritet',
        'label'       => 'описание блока',
        'desc'        => '',
        'type'        => 'text',
      ), 

         ),
    
            ),

 array(
        'label'       => 'Настройка блока приемущества',
        'id'          => 'setings_block_priem',
        'type'        => 'tab'
      ),

 array(
        'id'          => 'name_block_priem',
        'label'       => 'Название блока',
        'desc'        => 'Укажите название блока, например: Почему уборку доверяют именно нам?',
        'type'        => 'text',
      ), 


array(
        'id'          => 'add_block_priem',
        'label'       => 'Добавить приемущество',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'icon_font_add_block_priem',
        'label'       => 'Добавить иконку блока',
        'desc'        => 'Весь перечень иконок <a href="https://fontawesome.ru/all-icons/">тут</a>',
        'type'        => 'text',
      ), 
             array(
        'id'          => 'title_block_priem1',
        'label'       => 'Название 1-го приемущества',
        'desc'        => '',
        'type'        => 'text',
      ), 
             array(
        'id'          => 'title_block_priem2',
        'label'       => 'Название 2-го приемущества',
        'desc'        => '',
        'type'        => 'text',
      ), 
        array(
        'id'          => 'desc_block_priem',
        'label'       => 'описание приемущества',
        'desc'        => '',
        'type'        => 'text',
      ), 

         ),
    
            ),

// Настройки блока порядок работы

  array(
        'label'       => 'Настройки блока порядок работы',
        'id'          => 'setings_block_work_foot_tab',
        'type'        => 'tab'
      ),

  array(
        'id'          => 'name_block_work_foot',
        'label'       => 'Название блока например: Порядок работы компании',
        'desc'        => '',
        'type'        => 'text',
      ), 
   array(
        'id'          => 'desc_block_work_foot',
        'label'       => 'Описание блока например: Мы работаем вы отдыхаете',
        'desc'        => '',
        'type'        => 'text',
      ), 
   array(
        'id'          => 'name_level_1_work',
        'label'       => 'Название 1-го уровень уборки',
        'desc'        => '',
        'type'        => 'text',
      ),
   array(
        'id'          => 'desc_level_1_work',
        'label'       => 'Описание 1-го уровень уборки',
        'desc'        => '',
        'type'        => 'text',
      ),

   array(
        'id'          => 'name_level_2_work',
        'label'       => 'Название 2-го уровень уборки',
        'desc'        => '',
        'type'        => 'text',
      ),
   array(
        'id'          => 'desc_level_2_work',
        'label'       => 'Описание 2-го уровень уборки',
        'desc'        => '',
        'type'        => 'text',
      ),

   array(
        'id'          => 'name_level_3_work',
        'label'       => 'Название 3-го уровень уборки',
        'desc'        => '',
        'type'        => 'text',
      ),
   array(
        'id'          => 'desc_level_3_work',
        'label'       => 'Описание 3-го уровень уборки',
        'desc'        => '',
        'type'        => 'text',
      ),

   array(
        'id'          => 'name_level_4_work',
        'label'       => 'Название 4-го уровень уборки',
        'desc'        => '',
        'type'        => 'text',
      ),

   array(
        'id'          => 'desc_level_4_work',
        'label'       => 'Описание 4-го уровень уборки',
        'desc'        => '',
        'type'        => 'text',
      ),

   array(
        'id'          => 'desc_level_upload_work',
        'label'       => 'Загрузите картинку блока',
        'desc'        => '',
        'type'        => 'upload',
      ),

// конец


// Настройка блока  наша статистика
array(
        'label'       => 'Настройка блока  наша статистика',
        'id'          => 'block_statistic_tab',
        'type'        => 'tab'
      ),

array(
        'id'          => 'add_statistic_list',
        'label'       => 'Добавить показатель',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'name_statistic_list',
        'label'       => 'Название',
        'desc'        => '',
        'type'        => 'text',
      ), 

      array(
        'id'          => 'namber_statistic_list',
        'label'       => 'Количество',
        'desc'        => '',
        'type'        => 'text',
      ), 
      array(
        'id'          => 'upload_statistic_list',
        'label'       => 'иконка',
        'desc'        => '',
        'type'        => 'upload',
      ), 

         ),
    
            ),
 array(
        'id'          => 'fon_statistic_list',
        'label'       => 'Загрузите фон блока',
        'desc'        => '',
        'type'        => 'upload',
      ), 

// конец

 // Настройки блока с формой заказа
array(
        'label'       => 'Настройки блока с формой заказа',
        'id'          => 'setings_block_form_tab',
        'type'        => 'tab'
      ),
array(
        'id'          => 'name_setings_block_form',
        'label'       => 'Название блока например: Попробуйте уже сейчас',
        'desc'        => '',
        'type'        => 'text',
      ), 
array(
        'id'          => 'desc_setings_block_form',
        'label'       => 'Описание блока например: При оформлении заказа через cайт скидка 10%',
        'desc'        => '',
        'type'        => 'text',
      ), 


 // Конец 

// Настройка блока о нас

array(
        'label'       => 'Настройки блока о нас',
        'id'          => 'setings_about_tab',
        'type'        => 'tab'
      ),
array(
        'id'          => 'name_setings_about',
        'label'       => 'Название блока например: о нас',
        'desc'        => '',
        'type'        => 'text',
      ),
array(
        'id'          => 'desc_setings_about',
        'label'       => 'Описание блока',
        'desc'        => '',
        'type'        => 'textarea',
      ),
array(
        'id'          => 'about_uplod_fon',
        'label'       => 'Загрузите фоновую картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),

// конец

// Настройка блока наши услуги

array(
        'label'       => 'Настройка блока наши услуги',
        'id'          => 'setings_block_servises_tab',
        'type'        => 'tab'
      ),
array(
        'id'          => 'name_setings_block_servises',
        'label'       => 'Название блока например: Наши услуги',
        'desc'        => '',
        'type'        => 'text',
      ),
array(
        'id'          => 'desc_setings_block_servises',
        'label'       => 'Описание блока например: Компания Марафет предлагает вам следующие услуги',
        'desc'        => '',
        'type'        => 'text',
      ),
array(
        'id'          => 'name_servis1',
        'label'       => 'Название 1-й услуги',
        'desc'        => '',
        'type'        => 'text',
      ),
array(
        'id'          => 'desc_servis1',
        'label'       => 'Описание 1-й услуги',
        'desc'        => '',
        'type'        => 'textarea',
      ),
array(
        'id'          => 'upload_servis1',
        'label'       => 'иконка 1-й услуги',
        'desc'        => '',
        'type'        => 'upload',
      ),


array(
        'id'          => 'name_servis2',
        'label'       => 'Название 2-й услуги',
        'desc'        => '',
        'type'        => 'text',
      ),
array(
        'id'          => 'desc_servis2',
        'label'       => 'Описание 2-й услуги',
        'desc'        => '',
        'type'        => 'textarea',
      ),
array(
        'id'          => 'upload_servis2',
        'label'       => 'иконка 2-й услуги',
        'desc'        => '',
        'type'        => 'upload',
      ),


array(
        'id'          => 'name_servis3',
        'label'       => 'Название 3-й услуги',
        'desc'        => '',
        'type'        => 'text',
      ),
array(
        'id'          => 'desc_servis3',
        'label'       => 'Описание 3-й услуги',
        'desc'        => '',
        'type'        => 'textarea',
      ),
array(
        'id'          => 'upload_servis3',
        'label'       => 'иконка 3-й услуги',
        'desc'        => '',
        'type'        => 'upload',
      ),


array(
        'id'          => 'name_servis4',
        'label'       => 'Название 4-й услуги',
        'desc'        => '',
        'type'        => 'text',
      ),
array(
        'id'          => 'desc_servis4',
        'label'       => 'Описание 4-й услуги',
        'desc'        => '',
        'type'        => 'text',
      ),
array(
        'id'          => 'upload_servis4',
        'label'       => 'иконка 4-й услуги',
        'desc'        => '',
        'type'        => 'upload',
      ),

// Конец

// Настройка блока цен
array(
        'label'       => 'Настройка блока цены',
        'id'          => 'setings_prais_tab',
        'type'        => 'tab'
      ),
array(
        'id'          => 'name_setings_prais',
        'label'       => 'Название блока например: Наши цены',
        'desc'        => '',
        'type'        => 'text',
      ),
array(
        'id'          => 'desc_setings_prais',
        'label'       => 'Описание блока',
        'desc'        => '',
        'type'        => 'text',
      ),



array(
        'id'          => 'name_servis_pris1',
        'label'       => 'Название услуги например: квартира',
        'desc'        => '',
        'type'        => 'text',
      ),
array(
        'id'          => 'name_servis_pris1_block1',
        'label'       => 'Первый пункт в прайсе',
        'desc'        => '',
        'type'        => 'text',
      ),

array(
        'id'          => 'name_servis_pris1_list',
        'label'       => 'Добавить услугу и цену',
        'desc'        => '1-й блок с прайсом',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'add_prise_list1',
        'label'       => 'название услуги и цены',
        'desc'        => '',
        'type'        => 'text',
      ), 


         ),
    
            ),

array(
        'id'          => 'name_servis_pris2',
        'label'       => 'Название услуги например: коттедж',
        'desc'        => '',
        'type'        => 'text',
      ),

array(
        'id'          => 'name_servis_pris1_block2',
        'label'       => 'Первый пункт в прайсе',
        'desc'        => '',
        'type'        => 'text',
      ),

array(
        'id'          => 'name_servis_pris2_list',
        'label'       => 'Добавить услугу и цену',
        'desc'        => '2-й блок с прайсом',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'add_prise_list2',
        'label'       => 'название услуги и цены',
        'desc'        => '',
        'type'        => 'text',
      ), 


         ),
    
            ),

array(
        'id'          => 'name_servis_pris3',
        'label'       => 'Название услуги например: офис',
        'desc'        => '',
        'type'        => 'text',
      ),
array(
        'id'          => 'name_servis_pris1_block3',
        'label'       => 'Первый пункт в прайсе',
        'desc'        => '',
        'type'        => 'text',
      ),

array(
        'id'          => 'name_servis_pris3_list',
        'label'       => 'Добавить услугу и цену',
        'desc'        => '3-й блок с прайсом',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'add_prise_list3',
        'label'       => 'название услуги и цены',
        'desc'        => '',
        'type'        => 'text',
      ), 


         ),
    
            ),

// конец

// Настройки блока отзывов
array(
        'label'       => 'Настройки блока отзывов',
        'id'          => 'setings_block_reviews_tab',
        'type'        => 'tab'
      ),

array(
        'id'          => 'setings_block_reviews_list',
        'label'       => 'Добавить отзыв',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'name_klient_reviews',
        'label'       => 'Имя клиента',
        'desc'        => '',
        'type'        => 'text',
      ), 
            array(
        'id'          => 'text_reviews',
        'label'       => 'Текст отзыва',
        'desc'        => '',
        'type'        => 'textarea',
      ),
            array(
        'id'          => 'photo_klient_reviews',
        'label'       => 'фото клиента',
        'desc'        => '',
        'type'        => 'upload',
      ),


         ),
    
            ),

array(
        'id'          => 'fon_block_reviews',
        'label'       => 'фон блока с отзывами',
        'desc'        => '',
        'type'        => 'upload',
      ),

// Конец

// Настройки блока партнёры
array(
        'label'       => 'Настройки блока партнёры',
        'id'          => 'setings_block_partners_tab',
        'type'        => 'tab'
      ),

array(
        'id'          => 'name_partners_block',
        'label'       => 'Название блока например: Бренды, которые мы используем',
        'desc'        => '',
        'type'        => 'text',
      ), 
            array(
        'id'          => 'desc_partners_block',
        'label'       => 'Описание блока',
        'desc'        => '',
        'type'        => 'text',
      ),


            array(
        'id'          => 'add_logo_partners_list',
        'label'       => 'Добавить партнёра',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'logo_partners',
        'label'       => 'лого партнёра',
        'desc'        => '',
        'type'        => 'upload',
      ),


         ),
    
            ),

// Конец










        


            ),

  
       );


  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
  $post_id = isset( $_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : 0);
  $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
  if( $template_file == 'index.php'){
    
    ot_register_meta_box( $home_page_prokat );
  }
  
  
}
