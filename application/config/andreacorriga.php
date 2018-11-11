<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$ci =& get_instance();
$ci->load->helper('url'); 

// Main & general info
$config['main'] = array(
			'name' 		=> 'Andrea',
			'surname'	=> 'Corriga',
			'full_name'	=> 'Andrea Corriga',
			'username'	=> 'AsoStrife',
			'slogan'	=> 'PhD Student &amp; Software Developer', 
			'main_title'		=> 'Andrea Corriga (@AsoStrife) &bull; PhD Student and Developer', 
			'second_title'		=> ' &bull; Andrea Corriga (@AsoStrife)', 
			'author'	=> 'Andrea Corriga (@AsoStrife)',
			'email'		=> 'me@andreacorriga.com',
			'description' => 'Hello World, I\'m Andrea Corriga (@AsoStrife) and this is my personal website. I\'m a PhD Student and Software Developer. In this website you can find my personal projects, publications, my social profile and other stuffs',
			'keywords' 	=> 'Andrea, Corriga, Aso, AsoStrife, Cloud, CloudAso, Microsoft, Student, Partner, MSP, Portfolio, Personal Website, Webmaster, Web, Developer, PHP, Javascript, Python, Streamer, Twitch, University, Master, Graduate, Computer Science, Coding',
			'robots' 	=> 'index, follow',
			'language' 	=> 'en',
			'rating' 	=> 'general'
		);

// Images
$config['img'] = array(
	'profile'		 	=> base_url('/img/profile/andrea-corriga-asostrife-profile-image.png'),
	'profile_200x200' 	=> base_url('/img/profile/andrea-corriga-asostrife-profile-image-200x200.png'),
	'profile_chocobo' 	=> base_url('/img/profile/andrea-corriga-asostrife-chocobo-small.png'),
	'favicon' 			=> base_url('/img/favicon/favicon.png'),
	'favicon_72x72' 	=> base_url('/img/favicon/favicon-72x72.png'),
	'favicon_114x114' 	=> base_url('/img/favicon/favicon-114x114.png')
);

// Social links
$config['social'] = array(
				'facebook' 	=> 'https://facebook.com/AsoStrife',
				'twitter' 	=> 'https://twitter.com/AsoStrife', 
				'instagram' => 'https://instagram.com/AsoStrife',
				'github' 	=> 'https://github.com/AsoStrife',
				'linkedin' 	=> 'https://www.linkedin.com/in/andrea-corriga-20254465/',
				'telegram' 	=> 'https://t.me/AsoStrife',
				'twitch' 	=> 'https://www.twitch.tv/asostrife'
			);

// Facebook Open Graph
$config['facebook_open_graph'] = array(
						'app_id' 		=> '2210608369160877',
						'type' 			=> 'profile',
						'url'			=> base_url(uri_string()),
						//'title' 		=> $config['main']['main_title'],
						'image' 		=> $config['img']['profile_200x200'],
						'description' 	=> $config['main']['description']
					);
