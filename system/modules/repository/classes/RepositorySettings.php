<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   Repository
 * @author    Peter Koch, IBK Software AG
 * @license   See accompaning file LICENSE.txt
 * @copyright Peter Koch 2008-2010
 */


// enable/disable SOAP cache
define('REPOSITORY_SOAPCACHE', true);

// valid core versions in descending order
define('REPOSITORY_COREVERSIONS',
		'30030006,30030006;'.	// 3.3.0 RC1
		'30030003,30030003;'.	// 3.3.0 beta1
		'30020099,30020099;'.	// 3.2.9 stable
		'30020089,30020089;'.	// 3.2.8 stable
		'30020079,30020079;'.	// 3.2.7 stable
		'30020069,30020069;'.	// 3.2.6 stable
		'30020059,30020059;'.	// 3.2.5 stable
		'30020049,30020049;'.	// 3.2.4 stable
		'30020039,30020039;'.	// 3.2.3 stable
		'30020029,30020029;'.	// 3.2.2 stable
		'30020019,30020019;'.	// 3.2.1 stable
		'30020009,30020009;'.	// 3.2.0 stable
		'30020006,30020006;'.	// 3.2.0 RC1
		'30020004,30020004;'.	// 3.2.0 beta2
		'30020003,30020003;'.	// 3.2.0 beta1
		'30010059,30010059;'.	// 3.1.5 stable
		'30010049,30010049;'.	// 3.1.4 stable
		'30010039,30010039;'.	// 3.1.3 stable
		'30010029,30010029;'.	// 3.1.2 stable
		'30010019,30010019;'.	// 3.1.1 stable
		'30010009,30010009;'.	// 3.1.0 stable
		'30010006,30010006;'.	// 3.1.0 RC1
		'30010003,30010003;'.	// 3.1.0 beta1
		'30000069,30000069;'.	// 3.0.6 stable
		'30000059,30000059;'.	// 3.0.5 stable
		'30000049,30000049;'.	// 3.0.4 stable
		'30000039,30000039;'.	// 3.0.3 stable
		'30000029,30000029;'.	// 3.0.2 stable
		'30000019,30000019;'.	// 3.0.1 stable
		'30000009,30000009;'.	// 3.0.0 stable
		'30000007,30000007;'.	// 3.0.0 RC2
		'30000006,30000006;'.	// 3.0.0 RC1
		'30000003,30000003;'.	// 3.0.0 beta1
		'20110179,20110179;'.	// 2.11.17 stable
		'20110169,20110169;'.	// 2.11.16 stable
		'20110159,20110159;'.	// 2.11.15 stable
		'20110149,20110149;'.	// 2.11.14 stable
		'20110139,20110139;'.	// 2.11.13 stable
		'20110129,20110129;'.	// 2.11.12 stable
		'20110119,20110119;'.	// 2.11.11 stable
		'20110109,20110109;'.	// 2.11.10 stable
		'20110099,20110099;'.	// 2.11.9 stable
		'20110089,20110089;'.	// 2.11.8 stable
		'20110079,20110079;'.	// 2.11.7 stable
		'20110069,20110069;'.	// 2.11.6 stable
		'20110059,20110059;'.	// 2.11.5 stable
		'20110049,20110049;'.	// 2.11.4 stable
		'20110039,20110039;'.	// 2.11.3 stable
		'20110029,20110029;'.	// 2.11.2 stable
		'20110019,20110019;'.	// 2.11.1 stable
		'20110009,20110009;'.	// 2.11.0 stable
		'20110007,20110007;'.	// 2.11.0 RC2
		'20110006,20110006;'.	// 2.11.0 RC1
		'20110003,20110003;'.	// 2.11.0 beta1
		'20100049,20100049;'.	// 2.10.4 stable
		'20100039,20100039;'.	// 2.10.3 stable
		'20100029,20100029;'.	// 2.10.2 stable
		'20100029,20100029;'.	// 2.10.2 stable
		'20100019,20100019;'.	// 2.10.1 stable
		'20100009,20100009;'.	// 2.10.0 stable
		'20100006,20100006;'.	// 2.10.0 RC1
		'20100003,20100003;'.	// 2.10.0 beta1
		'20090059,20090059;'.	// 2.9.5 stable
		'20090049,20090049;'.	// 2.9.4 stable
		'20090039,20090039;'.	// 2.9.3 stable
		'20090029,20090029;'.	// 2.9.2 stable
		'20090019,20090019;'.	// 2.9.1 stable
		'20090009,20090009;'.	// 2.9.0 stable
		'20090006,20090006;'.	// 2.9.0 RC1
		'20090003,20090003;'.	// 2.9.0 beta1
		'20080049,20080049;'.	// 2.8.4 stable
		'20080039,20080039;'.	// 2.8.3 stable
		'20080029,20080029;'.	// 2.8.2 stable
		'20080019,20080019;'.	// 2.8.1 stable
		'20080009,20080009;'.	// 2.8.0 stable
		'20080007,20080007;'.	// 2.8.0 RC2
		'20080006,20080006;'.	// 2.8.0 RC1
		'20070069,20070069;'.	// 2.7.6 stable
		'20070059,20070059;'.	// 2.7.5 stable
		'20070049,20070049;'.	// 2.7.4 stable
		'20070039,20070039;'.	// 2.7.3 stable
		'20070029,20070029;'.	// 2.7.2 stable
		'20070019,20070019;'.	// 2.7.1 stable
		'20070009,20070009;'.	// 2.7.0 stable
		'20070007,20070007;'.	// 2.7.0 RC2
		'20070006,20070006;'.	// 2.7.0 RC1
		'20060079,20060079;'.	// 2.6.7 stable
		'20060069,20060069;'.	// 2.6.6 stable
		'20060059,20060059;'.	// 2.6.5 stable
		'20060049,20060049;'.	// 2.6.4 stable
		'20060039,20060039;'.	// 2.6.3 stable
		'20060029,20060029;'.	// 2.6.2 stable
		'20060019,20060019;'.	// 2.6.1 stable
		'20060009,20060009;'.	// 2.6.0 stable
		'20050119,20060004;'.	// 2.6.0 beta2
		'20050109,20060003;'.	// 2.6.0 beta1
		'20050099,20050099;'.	// 2.5.9 stable
		'20050089,20050089;'.	// 2.5.8 stable
		'20050079,20050079;'.	// 2.5.7 stable
		'20050069,20050069;'.	// 2.5.6 stable
		'20050059,20050059;'.	// 2.5.5 stable
		'20050039,20050039;'.	// 2.5.3 stable
		'20050029,20050029;'.	// 2.5.2 stable
		'20050019,20050019;'.	// 2.5.1 stable
		'20050009,20050009;'.	// 2.5.0 stable
		'20040079,20040079;'.	// 2.4.7 stable
		'20040069,20040069;'.	// 2.4.6 stable
		'20040009,20040009;'.	// 2.4.0 stable
		'20030029,20030029'		// 2.3.2 stable
);

// HTML tags allowed in long texts
define('REPOSITORY_TEXTTAGS', '<h3><h4><h5><h6><p><pre><blockquote><br><ol><ul><li><em><strong>');
