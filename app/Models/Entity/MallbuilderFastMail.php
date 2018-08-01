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
 * @Table(name="mallbuilder_fast_mail")
 * @uses      MallbuilderFastMail
 */
class MallbuilderFastMail extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $company 
     * @Column(name="company", type="string", length=30)
     */
    private $company;

    /**
     * @var string $pinyin 物流
     * @Column(name="pinyin", type="string", length=18)
     * @Required()
     */
    private $pinyin;

    /**
     * @var int $status 状态
     * @Column(name="status", type="integer", default=0)
     */
    private $status;

    /**
     * @var string $trackUrl 快递跟踪URL
     * @Column(name="trackUrl", type="string", length=255)
     */
    private $trackUrl;

    /**
     * @var string $trackInterface 快递100物流追踪接口
     * @Column(name="trackInterface", type="string", length=255)
     */
    private $trackInterface;

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
    public function setCompany(string $value): self
    {
        $this->company = $value;

        return $this;
    }

    /**
     * 物流
     * @param string $value
     * @return $this
     */
    public function setPinyin(string $value): self
    {
        $this->pinyin = $value;

        return $this;
    }

    /**
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 快递跟踪URL
     * @param string $value
     * @return $this
     */
    public function setTrackUrl(string $value): self
    {
        $this->trackUrl = $value;

        return $this;
    }

    /**
     * 快递100物流追踪接口
     * @param string $value
     * @return $this
     */
    public function setTrackInterface(string $value): self
    {
        $this->trackInterface = $value;

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
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * 物流
     * @return string
     */
    public function getPinyin()
    {
        return $this->pinyin;
    }

    /**
     * 状态
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 快递跟踪URL
     * @return string
     */
    public function getTrackUrl()
    {
        return $this->trackUrl;
    }

    /**
     * 快递100物流追踪接口
     * @return string
     */
    public function getTrackInterface()
    {
        return $this->trackInterface;
    }

}
