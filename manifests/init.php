class users {
	user { 'selfdecode':
	    ensure => 'present',
	    groups => ['sudo', 'ubuntu'],
	    home => '/home/<username>',
	    managehome => true,
	    password => 'sdteam',
	    shell => '/bin/bash',
	    require => User['ubuntu']
	}

	user { 'ubuntu':
	  ensure           => 'present',
	}

	groups => ['sudo', 'ubuntu'],
}