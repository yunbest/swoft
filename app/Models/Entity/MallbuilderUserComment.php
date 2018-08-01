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
 * 店铺评价表

 * @Entity()
 * @Table(name="mallbuilder_user_comment")
 * @uses      MallbuilderUserComment
 */
class MallbuilderUserComment extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $userid 会员ID
     * @Column(name="userid", type="integer")
     * @Required()
     */
    private $userid;

    /**
     * @var string $user 会员名
     * @Column(name="user", type="string", length=100)
     * @Required()
     */
    private $user;

    /**
     * @var int $byid 被评价者ID
     * @Column(name="byid", type="integer")
     * @Required()
     */
    private $byid;

    /**
     * @var int $item1 项目1
     * @Column(name="item1", type="integer")
     * @Required()
     */
    private $item1;

    /**
     * @var int $item2 项目2
     * @Column(name="item2", type="integer")
     * @Required()
     */
    private $item2;

    /**
     * @var int $item3 项目3
     * @Column(name="item3", type="integer")
     * @Required()
     */
    private $item3;

    /**
     * @var int $item4 项目4
     * @Column(name="item4", type="integer")
     * @Required()
     */
    private $item4;

    /**
     * @var int $uptime 创建时间
     * @Column(name="uptime", type="integer")
     * @Required()
     */
    private $uptime;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 会员ID
     * @param int $value
     * @return $this
     */
    public function setUserid(int $value): self
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * 会员名
     * @param string $value
     * @return $this
     */
    public function setUser(string $value): self
    {
        $this->user = $value;

        return $this;
    }

    /**
     * 被评价者ID
     * @param int $value
     * @return $this
     */
    public function setByid(int $value): self
    {
        $this->byid = $value;

        return $this;
    }

    /**
     * 项目1
     * @param int $value
     * @return $this
     */
    public function setItem1(int $value): self
    {
        $this->item1 = $value;

        return $this;
    }

    /**
     * 项目2
     * @param int $value
     * @return $this
     */
    public function setItem2(int $value): self
    {
        $this->item2 = $value;

        return $this;
    }

    /**
     * 项目3
     * @param int $value
     * @return $this
     */
    public function setItem3(int $value): self
    {
        $this->item3 = $value;

        return $this;
    }

    /**
     * 项目4
     * @param int $value
     * @return $this
     */
    public function setItem4(int $value): self
    {
        $this->item4 = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setUptime(int $value): self
    {
        $this->uptime = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 会员ID
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 会员名
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 被评价者ID
     * @return int
     */
    public function getByid()
    {
        return $this->byid;
    }

    /**
     * 项目1
     * @return int
     */
    public function getItem1()
    {
        return $this->item1;
    }

    /**
     * 项目2
     * @return int
     */
    public function getItem2()
    {
        return $this->item2;
    }

    /**
     * 项目3
     * @return int
     */
    public function getItem3()
    {
        return $this->item3;
    }

    /**
     * 项目4
     * @return int
     */
    public function getItem4()
    {
        return $this->item4;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getUptime()
    {
        return $this->uptime;
    }

}
