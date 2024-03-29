<?php

use yii\db\Migration;

class m150829_124523_init_demo extends Migration
{
    public function up()
    {
        $this->insert('menu', ['id' => 'main-menu', 'title' => 'Main Menu']);

        $this->insert('menu_link', ['id' => 'home', 'menu_id' => 'main-menu', 'link' => '/site/index', 'label' => 'Home', 'alwaysVisible' => 1, 'order' => 1]);
        $this->insert('menu_link', ['id' => 'about', 'menu_id' => 'main-menu', 'link' => '/site/about', 'label' => 'About', 'alwaysVisible' => 1, 'order' => 9]);
        $this->insert('menu_link', ['id' => 'test-page', 'menu_id' => 'main-menu', 'link' => '/site/test', 'label' => 'Test Page', 'alwaysVisible' => 1, 'order' => 2]);
        $this->insert('menu_link', ['id' => 'contact', 'menu_id' => 'main-menu', 'link' => '/site/contact', 'label' => 'Contact', 'alwaysVisible' => 1, 'order' => 10]);

        $this->insert('page', ['slug' => 'test', 'title' => 'Test Page', 'author_id' => 1, 'status' => 1, 'comment_status' => 0,
            'published_at' => '1440720000', 'created_at' => '1440763228', 'updated_at' => '1440771930',
            'content' => '<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id ullamcorper nibh, id blandit ante. Suspendisse non ante commodo, finibus nibh at, sollicitudin felis. Aliquam interdum eros eget tempor porta. Quisque viverra velit magna, ac eleifend mi vehicula nec. Curabitur sollicitudin metus eget odio posuere pulvinar. Nullam vestibulum massa ac dolor mattis pharetra. Vestibulum finibus non massa ut cursus.</p>' .
                '<p style="text-align: justify;">Proin eget ullamcorper elit, ac luctus ex. Pellentesque mattis nibh nec nunc fermentum lobortis. Cras malesuada ipsum eget massa pulvinar euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque, tortor in efficitur semper, tellus lorem blandit augue, sed euismod purus velit nec libero. Pellentesque dictum faucibus augue, ac rutrum velit. Quisque tristique neque sit amet turpis consectetur rutrum. Aliquam ac vulputate mauris.</p>']);

        $this->insert('post', ['slug' => 'integer-id-ullamcorper-nibh', 'title' => 'Integer id ullamcorper nibh', 'author_id' => 1, 'status' => 1, 'comment_status' => 1,
            'published_at' => '1440720000', 'created_at' => '1440763228', 'updated_at' => '1440771930',
            'content' => '<p style="text-align: justify;">Integer id ullamcorper nibh, id blandit ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non ante commodo, finibus nibh at, sollicitudin felis. Aliquam interdum eros eget tempor porta. Quisque viverra velit magna, ac eleifend mi vehicula nec. Curabitur sollicitudin metus eget odio posuere pulvinar. Nullam vestibulum massa ac dolor mattis pharetra. Vestibulum finibus non massa ut cursus.</p>' .
                '<p style="text-align: justify;">Proin eget ullamcorper elit, ac luctus ex. Pellentesque mattis nibh nec nunc fermentum lobortis. Cras malesuada ipsum eget massa pulvinar euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque, tortor in efficitur semper, tellus lorem blandit augue, sed euismod purus velit nec libero. Pellentesque dictum faucibus augue, ac rutrum velit. Quisque tristique neque sit amet turpis consectetur rutrum. Aliquam ac vulputate mauris.</p>']);

        $this->insert('post', ['slug' => 'proin-eget-ullamcorper-elit', 'title' => 'Proin eget ullamcorper elit', 'author_id' => 1, 'status' => 1, 'comment_status' => 1,
            'published_at' => '1440720000', 'created_at' => '1440763228', 'updated_at' => '1440771930',
            'content' => '<p style="text-align: justify;">Suspendisse non ante commodo, finibus nibh at, sollicitudin felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id ullamcorper nibh, id blandit ante. Aliquam interdum eros eget tempor porta. Quisque viverra velit magna, ac eleifend mi vehicula nec. Curabitur sollicitudin metus eget odio posuere pulvinar. Nullam vestibulum massa ac dolor mattis pharetra. Vestibulum finibus non massa ut cursus.</p>' .
                '<p style="text-align: justify;">Proin eget ullamcorper elit, ac luctus ex. Pellentesque mattis nibh nec nunc fermentum lobortis. Cras malesuada ipsum eget massa pulvinar euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque, tortor in efficitur semper, tellus lorem blandit augue, sed euismod purus velit nec libero. Pellentesque dictum faucibus augue, ac rutrum velit. Quisque tristique neque sit amet turpis consectetur rutrum. Aliquam ac vulputate mauris.</p>']);

    }

    public function down()
    {
        $this->delete('post', ['slug' => 'integer-id-ullamcorper-nibh']);
        $this->delete('post', ['slug' => 'proin-eget-ullamcorper-elit']);
        $this->delete('page', ['slug' => 'test']);
        $this->delete('menu_link', ['id' => 'home']);
        $this->delete('menu_link', ['id' => 'about']);
        $this->delete('menu_link', ['id' => 'contact']);
        $this->delete('menu', ['id' => 'main-menu']);
    }
}
