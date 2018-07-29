<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$ci =& get_instance();
$ci->load->helper('url'); 

// Main & general info
$config['main'] = array(
			'name' 		=> 'Andrea',
			'surname'	=> 'Corriga',
			'full_name'	=> 'Andrea Corriga',
			'username'	=> 'AsoStrife',
			'slogan'	=> 'Master Graduate Student &amp; Software Developer', 
			'title'		=> 'Andrea Corriga (@AsoStrife) &bull; Master Graduate Student and Software Developer', 
			'author'	=> 'Andrea Corriga (@AsoStrife)',
			'email'		=> 'me@andreacorriga.com',
			'description' => 'Personal Website of Andrea Corriga (@AsoStrife). Master Graduate Student and Software Developer. Check my portfolio, my personal project an other stuff',
			'keywords' 	=> 'Andrea, Corriga, Aso, AsoStrife, Cloud, CloudAso, Microsoft Student Partner, MSP, Portfolio, Personal Website, Webmaster, Web, Developer, PHP, Javascript, Python',
			'robots' 	=> 'noindex, nofollow',
			'language' 	=> 'en',
			'rating' 	=> 'general'
		);

// Images
$config['img'] = array(
	'profile'		 	=> base_url('img/profile/profile-image.png'),
	'profile_200x200' 	=> base_url('img/profile/profile-image-200x200.png'),
	'favicon' 			=> base_url('img/favicon/favicon.png'),
	'favicon_72x72' 	=> base_url('img/favicon/favicon-72x72.png'),
	'favicon_114x114' 	=> base_url('img/favicon/favicon-114x114.png')
);

// Social links
$config['social'] = array(
				'facebook' 	=> 'https://facebook.com/AsoStrife',
				'twitter' 	=> 'https://twitter.com/AsoStrife', 
				'instagram' => 'https://instagram.com/AsoStrife',
				'github' 	=> 'https://github.com/AsoStrife',
				'linkedin' 	=> 'https://www.linkedin.com/in/andrea-corriga-20254465/',
				'telegram' 	=> 'https://t.me/AsoStrife'
			);

// Facebook Open Graph
$config['facebook_open_graph'] = array(
						'app_id' 		=> '2210608369160877',
						'type' 			=> 'profile',
						'url'			=> base_url(),
						'title' 		=> $config['main']['author'],
						'image' 		=> $config['img']['profile_200x200'],
						'description' 	=> $config['main']['description']
					);
