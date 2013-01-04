<?php 
Router::add('/', 'index');
Router::add('/(.+)', 'page');
// Router::add('/one', 'test_one');
// Router::add('/two', 'test_two');
// Router::add('/two/(.+)', 'test_two');
// Router::add('/three/([a-z]+)', 'TestController.three');