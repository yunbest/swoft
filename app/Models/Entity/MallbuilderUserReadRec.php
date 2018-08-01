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
 * 会员访问记录表

 * @Entity()
 * @Table(name="mallbuilder_user_read_rec")
 * @uses      MallbuilderUserReadRec
 */
class MallbuilderUserReadRec extends Model
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
     */
    private $userid;

    /**
     * @var int $tid 被访问者ID
     * @Column(name="tid", type="integer")
     */
    private $tid;

    /**
     * @var int $type 类型
     * @Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var int $time 访问时间
     * @Column(name="time", type="integer")
     */
    private $time;

    /**
     * @var string $ip 
     * @Column(name="ip", type="char", length=15)
     */
    private $ip;

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
     * 被访问者ID
     * @param int $value
     * @return $this
     */
    public function setTid(int $value): self
    {
        $this->tid = $value;

        return $this;
    }

    /**
     * 类型
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 访问时间
     * @param int $value
     * @return $this
     */
    public function setTime(int $value): self
    {
        $this->time = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIp(string $value): self
    {
        $this->ip = $value;

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
     * 被访问者ID
     * @return int
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * 类型
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 访问时间
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

}
