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
 * 邮件模板

 * @Entity()
 * @Table(name="mallbuilder_mail_mod")
 * @uses      MallbuilderMailMod
 */
class MallbuilderMailMod extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $subject 主题
     * @Column(name="subject", type="string", length=100)
     */
    private $subject;

    /**
     * @var string $title 标题
     * @Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @var string $message 内容
     * @Column(name="message", type="text", length=65535)
     */
    private $message;

    /**
     * @var string $flag 标示
     * @Column(name="flag", type="string", length=30)
     */
    private $flag;

    /**
     * @var int $type 类型
     * @Column(name="type", type="tinyint", default=0)
     */
    private $type;

    /**
     * @var int $status 
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

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
     * 主题
     * @param string $value
     * @return $this
     */
    public function setSubject(string $value): self
    {
        $this->subject = $value;

        return $this;
    }

    /**
     * 标题
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * 内容
     * @param string $value
     * @return $this
     */
    public function setMessage(string $value): self
    {
        $this->message = $value;

        return $this;
    }

    /**
     * 标示
     * @param string $value
     * @return $this
     */
    public function setFlag(string $value): self
    {
        $this->flag = $value;

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
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

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
     * 主题
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * 标题
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 内容
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * 标示
     * @return string
     */
    public function getFlag()
    {
        return $this->flag;
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
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

}
