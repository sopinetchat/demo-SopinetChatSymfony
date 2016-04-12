<?php
namespace AppBundle\Entity;
use Sopinet\ChatBundle\Entity\Message;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class MessageCustomGlobal extends Message
{
    const COLORLEVEL_NORMAL = "normal";
    const COLORLEVEL_CRITICAL = "critical";
    
    /**
     * @var string
     * @ORM\Column(name="colorLevel", type="string", columnDefinition="enum('normal','critical')")
     */
    protected $colorLevel;
    
    public function setColorLevel($colorLevel) {
        $this->colorLevel = $colorLevel;
        
        return $this;
    }
    
    public function getColorLevel() {
        return $this->colorLevel;
    }

    public function getMyForm() {
        return "\AppBundle\Form\MessageCustomGlobalType";
    }

    public function getMyDestionationUsers($container) {
        $userManager = $container->get('fos_user.user_manager');
        $users = $userManager->findUsers();

        return $users;
    }
    
    public function getMyMessageObject($container, $request = null) {
        $messageObject = parent::getMyMessageObject($container, $request);
        if ($this->colorLevel == MessageCustomGlobal::COLORLEVEL_CRITICAL) {
            $messageObject->text .= "¡ATENCIÓN!: " . $messageObject->text;
        }
        return $messageObject;
    }
}