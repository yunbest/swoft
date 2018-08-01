<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * @Entity()
 * @Table(name="pay_admin_menu")
 * @uses      PayAdminMenu
 */
class PayAdminMenu extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="smallint")
     */
    private $id;

    /**
     * @var string $name 
     * @Column(name="name", type="string", length=255)
     * @Required()
     */
    private $name;

    /**
     * @var string $url 
     * @Column(name="url", type="string", length=255)
     * @Required()
     */
    private $url;

    /**
     * @var int $displayorder 
     * @Column(name="displayorder", type="integer", default=0)
     */
    private $displayorder;

    /**
     * @var int $uid 
     * @Column(name="uid", type="integer")
     * @Required()
     */
    private $uid;

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setDisplayorder(int $value): self
    {
        $this->displayorder = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setUid(int $value): self
    {
        $this->uid = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

}
