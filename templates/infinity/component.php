<?php
    defined('_JEXEC') or die;

    // Output as HTML5
    $this->setHtml5(true);

    $this->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/template.css', 'text/css');
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
    <head>
        <jdoc:include type="head" />
    </head>

    <body class="contentpane">
        <div class="all">
            <div class="main">

                <jdoc:include type="message" />
                <jdoc:include type="component" />
            </div>
        </div>
    </body>
</html>
