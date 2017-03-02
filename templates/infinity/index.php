<?php
    // No direct access.
    defined('_JEXEC') or die;

    JLoader::import('joomla.filesystem.file');

    // Output as HTML5
    $this->setHtml5(true);

    $this->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/template.css', 'text/css');

    JHtml::_('bootstrap.framework');
    $this->addScript($this->baseurl.'/templates/'.$this->template.'/js/template.js');
?>

<!DOCTYPE html>

<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
		<meta name="HandheldFriendly" content="true" />
		<meta name="apple-mobile-web-app-capable" content="YES" />
		<jdoc:include type="head" />
	</head>

	<body class="body infinity-landing">
		<div class="main">
			<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-block">
                        <div class="header">

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="">Stotle</a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    hello@stotle.io
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <jdoc:include type="modules" name="header" />
                                </div>
                            </div>

                        </div>
                        <div class="header-content">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <jdoc:include type="modules" name="header-content" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="content">
                        <?php if($this->countModules('content-box-1')): ?>
                            <div class="row">
                                <div class="content-box-1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <jdoc:include type="modules" name="content-box-1" />
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($this->countModules('content-box-2')): ?>
                            <div class="row">
                                <div class="content-box-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <jdoc:include type="modules" name="content-box-2" />
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($this->countModules('content-box-3')): ?>
                            <div class="row">
                                <div class="content-box-3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <jdoc:include type="modules" name="content-box-3" />
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($this->countModules('content-box-4')): ?>
                            <div class="row">
                                <div class="content-box-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <jdoc:include type="modules" name="content-box-4" />
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($this->countModules('content-box-5')): ?>
                            <div class="row">
                                <div class="content-box-5 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <jdoc:include type="modules" name="content-box-5" />
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($this->countModules('content-box-6')): ?>
                            <div class="row">
                                <div class="content-box-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <jdoc:include type="modules" name="content-box-6" />
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($this->countModules('content-box-7')): ?>
                            <div class="row">
                                <div class="content-box-7 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <jdoc:include type="modules" name="content-box-7" />
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($this->countModules('content-box-8')): ?>
                            <div class="row">
                                <div class="content-box-8 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <jdoc:include type="modules" name="content-box-8" />
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($this->countModules('menu-box')): ?>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="menu-box">
                                        <jdoc:include type="modules" name="menu-box" />
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>

                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
                </div>
            </div>
        </div>

        <?php if($this->countModules('footer')): ?>
            <div class="footer-container">
                <footer class="footer">
                    <div class="row">
                        <div class="footer-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <jdoc:include type="modules" name="footer" />
                        </div>
                    </div>
                </footer>
            </div>
        <?php endif; ?>

		<jdoc:include type="modules" name="debug" />
	</body>
</html>
