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
 * 回复表

 * @Entity()
 * @Table(name="mallbuilder_replay")
 * @uses      MallbuilderReplay
 */
class MallbuilderReplay extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $puid 父uid
     * @Column(name="puid", type="string", length=32)
     * @Required()
     */
    private $puid;

    /**
     * @var string $userid 回复者userid
     * @Column(name="userid", type="string", length=32)
     */
    private $userid;

    /**
     * @var string $content 回复内容
     * @Column(name="content", type="string", length=255)
     * @Required()
     */
    private $content;

    /**
     * @var string $date 当前时间
     * @Column(name="date", type="timestamp", default="CURRENT_TIMESTAMP")
     */
    private $date;

    /**
     * @var string $auth 权限
     * @Column(name="auth", type="string", length=255)
     */
    private $auth;

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
     * 父uid
     * @param string $value
     * @return $this
     */
    public function setPuid(string $value): self
    {
        $this->puid = $value;

        return $this;
    }

    /**
     * 回复者userid
     * @param string $value
     * @return $this
     */
    public function setUserid(string $value): self
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * 回复内容
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * 当前时间
     * @param string $value
     * @return $this
     */
    public function setDate(string $value): self
    {
        $this->date = $value;

        return $this;
    }

    /**
     * 权限
     * @param string $value
     * @return $this
     */
    public function setAuth(string $value): self
    {
        $this->auth = $value;

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
     * 父uid
     * @return string
     */
    public function getPuid()
    {
        return $this->puid;
    }

    /**
     * 回复者userid
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 回复内容
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * 当前时间
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * 权限
     * @return string
     */
    public function getAuth()
    {
        return $this->auth;
    }

}
