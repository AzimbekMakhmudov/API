<?php namespace api\method;

use api\response\Error;

/**
 * @author MehdiKhody <khody.khoram@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 *
 * @method string|Error send()
 * @method bool hasChatId()
 * @method $this setChatId($integer)
 * @method $this remChatId()
 * @method string|int getChatId($default = null)
 */
class exportChatInviteLink extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return true;
    }
}