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
 * 网站初始化内容设置

 * @Entity()
 * @Table(name="mallbuilder_web_con")
 * @uses      MallbuilderWebCon
 */
class MallbuilderWebCon extends Model
{
    /**
     * @var int $conId ID
     * @Id()
     * @Column(name="con_id", type="integer")
     */
    private $conId;

    /**
     * @var string $conDesc 描述
     * @Column(name="con_desc", type="text", length=16777215)
     */
    private $conDesc;

    /**
     * @var string $conProvince 省
     * @Column(name="con_province", type="string", length=20)
     */
    private $conProvince;

    /**
     * @var string $conCity 市
     * @Column(name="con_city", type="string", length=20)
     */
    private $conCity;

    /**
     * @var int $conNo 排序
     * @Column(name="con_no", type="integer", default=0)
     */
    private $conNo;

    /**
     * @var int $conStatu 状态
     * @Column(name="con_statu", type="integer", default=0)
     */
    private $conStatu;

    /**
     * @var string $conTitle 标题
     * @Column(name="con_title", type="string", length=30)
     */
    private $conTitle;

    /**
     * @var string $conLinkaddr 链接地址
     * @Column(name="con_linkaddr", type="string", length=60)
     */
    private $conLinkaddr;

    /**
     * @var int $conGroup 组
     * @Column(name="con_group", type="tinyint")
     * @Required()
     */
    private $conGroup;

    /**
     * @var string $template 模板
     * @Column(name="template", type="string", length=50)
     */
    private $template;

    /**
     * @var string $title SEO标题
     * @Column(name="title", type="string", length=200)
     */
    private $title;

    /**
     * @var string $keywords SEO关键字
     * @Column(name="keywords", type="string", length=200)
     */
    private $keywords;

    /**
     * @var string $description SEO描述
     * @Column(name="description", type="string", length=200)
     */
    private $description;

    /**
     * @var int $msgOnline 是否调用留言板
     * @Column(name="msg_online", type="tinyint", default=0)
     */
    private $msgOnline;

    /**
     * @var string $lang 语言
     * @Column(name="lang", type="string", length=5)
     */
    private $lang;

    /**
     * @var int $type 类型
     * @Column(name="type", type="tinyint", default=0)
     */
    private $type;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setConId(int $value)
    {
        $this->conId = $value;

        return $this;
    }

    /**
     * 描述
     * @param string $value
     * @return $this
     */
    public function setConDesc(string $value): self
    {
        $this->conDesc = $value;

        return $this;
    }

    /**
     * 省
     * @param string $value
     * @return $this
     */
    public function setConProvince(string $value): self
    {
        $this->conProvince = $value;

        return $this;
    }

    /**
     * 市
     * @param string $value
     * @return $this
     */
    public function setConCity(string $value): self
    {
        $this->conCity = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setConNo(int $value): self
    {
        $this->conNo = $value;

        return $this;
    }

    /**
     * 状态
     * @param int $value
     * @return $this
     */
    public function setConStatu(int $value): self
    {
        $this->conStatu = $value;

        return $this;
    }

    /**
     * 标题
     * @param string $value
     * @return $this
     */
    public function setConTitle(string $value): self
    {
        $this->conTitle = $value;

        return $this;
    }

    /**
     * 链接地址
     * @param string $value
     * @return $this
     */
    public function setConLinkaddr(string $value): self
    {
        $this->conLinkaddr = $value;

        return $this;
    }

    /**
     * 组
     * @param int $value
     * @return $this
     */
    public function setConGroup(int $value): self
    {
        $this->conGroup = $value;

        return $this;
    }

    /**
     * 模板
     * @param string $value
     * @return $this
     */
    public function setTemplate(string $value): self
    {
        $this->template = $value;

        return $this;
    }

    /**
     * SEO标题
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * SEO关键字
     * @param string $value
     * @return $this
     */
    public function setKeywords(string $value): self
    {
        $this->keywords = $value;

        return $this;
    }

    /**
     * SEO描述
     * @param string $value
     * @return $this
     */
    public function setDescription(string $value): self
    {
        $this->description = $value;

        return $this;
    }

    /**
     * 是否调用留言板
     * @param int $value
     * @return $this
     */
    public function setMsgOnline(int $value): self
    {
        $this->msgOnline = $value;

        return $this;
    }

    /**
     * 语言
     * @param string $value
     * @return $this
     */
    public function setLang(string $value): self
    {
        $this->lang = $value;

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
     * ID
     * @return mixed
     */
    public function getConId()
    {
        return $this->conId;
    }

    /**
     * 描述
     * @return string
     */
    public function getConDesc()
    {
        return $this->conDesc;
    }

    /**
     * 省
     * @return string
     */
    public function getConProvince()
    {
        return $this->conProvince;
    }

    /**
     * 市
     * @return string
     */
    public function getConCity()
    {
        return $this->conCity;
    }

    /**
     * 排序
     * @return int
     */
    public function getConNo()
    {
        return $this->conNo;
    }

    /**
     * 状态
     * @return int
     */
    public function getConStatu()
    {
        return $this->conStatu;
    }

    /**
     * 标题
     * @return string
     */
    public function getConTitle()
    {
        return $this->conTitle;
    }

    /**
     * 链接地址
     * @return string
     */
    public function getConLinkaddr()
    {
        return $this->conLinkaddr;
    }

    /**
     * 组
     * @return int
     */
    public function getConGroup()
    {
        return $this->conGroup;
    }

    /**
     * 模板
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * SEO标题
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * SEO关键字
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * SEO描述
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 是否调用留言板
     * @return int
     */
    public function getMsgOnline()
    {
        return $this->msgOnline;
    }

    /**
     * 语言
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * 类型
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

}
