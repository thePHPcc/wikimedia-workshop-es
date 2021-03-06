<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'wikimedia\\es\\comment' => '/Comment.php',
                'wikimedia\\es\\commentaccepted' => '/CommentAccepted.php',
                'wikimedia\\es\\commentacceptedeventhandler' => '/CommentAcceptedEventHandler.php',
                'wikimedia\\es\\commentid' => '/CommentId.php',
                'wikimedia\\es\\commentmade' => '/CommentMade.php',
                'wikimedia\\es\\commentpublished' => '/CommentPublished.php',
                'wikimedia\\es\\commentrejected' => '/CommentRejected.php',
                'wikimedia\\es\\event' => '/Event.php',
                'wikimedia\\es\\message' => '/Message.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
