<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['per_page']             = 20;
$config['num_links']            = 4;
$config['cur_page']             = 1;
$config['use_page_numbers']     = TRUE;
$config['first_link']           = '<i class="fa fa-angle-left"></i>';
$config['next_link']            = '<i class="fa fa-angle-right"></i>';
$config['prev_link']            = '<i class="fa fa-angle-double-left"></i>';
$config['last_link']            = '<i class="fa fa-angle-double-right"></i>';
$config['uri_segment']          = 2;
$config['full_tag_open']        = '<ul class="pagination">';
$config['full_tag_close']       = '</ul>';
$config['first_tag_open']       = '<li>';
$config['first_tag_close']      = '</li>';
$config['last_tag_open']        = '<li>';
$config['last_tag_close']       = '</li>';
$config['first_url']            = '';
$config['cur_tag_open']         = '<li class="active"><span>';
$config['cur_tag_close']        = '</li>';
$config['next_tag_open']        = '<li>';
$config['next_tag_close']       = '</li>';
$config['prev_tag_open']        = '<li>';
$config['prev_tag_close']       = '</li>';
$config['num_tag_open']         = '<li>';
$config['num_tag_close']        = '</li>';
$config['page_query_string']    = TRUE;
$config['query_string_segment'] = 'page';
$config['text']                 = 'Displaying {start} to {end} of {total}';
