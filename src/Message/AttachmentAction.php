<?php
namespace Slack\Message;

use Slack\DataObject;

/**
 * An action inside a message attachment.
 *
 * @see https://api.slack.com/docs/attachments
 */
class AttachmentAction extends DataObject
{
    /**
     * Creates a new attachment action.
     *
     * @param string $title A label for the action.
     * @param string $url The fully qualified http or https URL to deliver users to. Invalid URLs will result in a message posted with the button omitted.
     * @param string $style Setting to `primary` turns the button green and indicates the best forward action to take. Providing `danger` turns the button red and indicates it some kind of destructive action. Use sparingly. Be default, buttons will use the UI's default text color..
     */
    public function __construct($title, $url, $style = null)
    {
        $this->data['type'] = 'button';
        $this->data['text'] = $title;
        $this->data['url'] = $url;
        if ($style) {
            $this->data['style'] = $style;
        }
    }

    /**
     * Gets the type of button.
     *
     * @return string The type of action (always button).
     */
    public function getType()
    {
        return $this->data['type'];
    }

    /**
     * Gets the text for the action.
     *
     * @return string The text for the action.
     */
    public function getTitle()
    {
        return $this->data['text'];
    }

    /**
     * Gets the url of the action.
     *
     * @return string The url of the action.
     */
    public function getURL()
    {
        return $this->data['url'];
    }


}
