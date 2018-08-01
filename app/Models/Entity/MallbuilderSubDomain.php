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
 * 城市分站表

 * @Entity()
 * @Table(name="mallbuilder_sub_domain")
 * @uses      MallbuilderSubDomain
 */
class MallbuilderSubDomain extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $dtype 类型
     * @Column(name="dtype", type="integer")
     * @Required()
     */
    private $dtype;

    /**
     * @var string $domain 名称
     * @Column(name="domain", type="string", length=20)
     * @Required()
     */
    private $domain;

    /**
     * @var string $topDomain 顶级域名
     * @Column(name="top_domain", type="string", length=255)
     */
    private $topDomain;

    /**
     * @var string $con 省
     * @Column(name="con", type="string", length=30)
     * @Required()
     */
    private $con;

    /**
     * @var string $con2 市
     * @Column(name="con2", type="string", length=20)
     */
    private $con2;

    /**
     * @var string $con3 区
     * @Column(name="con3", type="string", length=20)
     */
    private $con3;

    /**
     * @var string $con4 
     * @Column(name="con4", type="string", length=60)
     */
    private $con4;

    /**
     * @var string $des 描述
     * @Column(name="des", type="text", length=65535)
     */
    private $des;

    /**
     * @var int $isopen 是否开启
     * @Column(name="isopen", type="integer", default=1)
     */
    private $isopen;

    /**
     * @var string $logo logo
     * @Column(name="logo", type="string", length=100)
     */
    private $logo;

    /**
     * @var string $webTitle SEO标题
     * @Column(name="web_title", type="string", length=100)
     */
    private $webTitle;

    /**
     * @var string $webKeyword SEO关键字
     * @Column(name="web_keyword", type="string", length=100)
     */
    private $webKeyword;

    /**
     * @var string $webDes SEO描述
     * @Column(name="web_des", type="string", length=100)
     */
    private $webDes;

    /**
     * @var string $copyright 版权
     * @Column(name="copyright", type="text", length=65535)
     */
    private $copyright;

    /**
     * @var string $template 模板
     * @Column(name="template", type="string", length=50)
     */
    private $template;

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
     * 类型
     * @param int $value
     * @return $this
     */
    public function setDtype(int $value): self
    {
        $this->dtype = $value;

        return $this;
    }

    /**
     * 名称
     * @param string $value
     * @return $this
     */
    public function setDomain(string $value): self
    {
        $this->domain = $value;

        return $this;
    }

    /**
     * 顶级域名
     * @param string $value
     * @return $this
     */
    public function setTopDomain(string $value): self
    {
        $this->topDomain = $value;

        return $this;
    }

    /**
     * 省
     * @param string $value
     * @return $this
     */
    public function setCon(string $value): self
    {
        $this->con = $value;

        return $this;
    }

    /**
     * 市
     * @param string $value
     * @return $this
     */
    public function setCon2(string $value): self
    {
        $this->con2 = $value;

        return $this;
    }

    /**
     * 区
     * @param string $value
     * @return $this
     */
    public function setCon3(string $value): self
    {
        $this->con3 = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCon4(string $value): self
    {
        $this->con4 = $value;

        return $this;
    }

    /**
     * 描述
     * @param string $value
     * @return $this
     */
    public function setDes(string $value): self
    {
        $this->des = $value;

        return $this;
    }

    /**
     * 是否开启
     * @param int $value
     * @return $this
     */
    public function setIsopen(int $value): self
    {
        $this->isopen = $value;

        return $this;
    }

    /**
     * logo
     * @param string $value
     * @return $this
     */
    public function setLogo(string $value): self
    {
        $this->logo = $value;

        return $this;
    }

    /**
     * SEO标题
     * @param string $value
     * @return $this
     */
    public function setWebTitle(string $value): self
    {
        $this->webTitle = $value;

        return $this;
    }

    /**
     * SEO关键字
     * @param string $value
     * @return $this
     */
    public function setWebKeyword(string $value): self
    {
        $this->webKeyword = $value;

        return $this;
    }

    /**
     * SEO描述
     * @param string $value
     * @return $this
     */
    public function setWebDes(string $value): self
    {
        $this->webDes = $value;

        return $this;
    }

    /**
     * 版权
     * @param string $value
     * @return $this
     */
    public function setCopyright(string $value): self
    {
        $this->copyright = $value;

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
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 类型
     * @return int
     */
    public function getDtype()
    {
        return $this->dtype;
    }

    /**
     * 名称
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * 顶级域名
     * @return string
     */
    public function getTopDomain()
    {
        return $this->topDomain;
    }

    /**
     * 省
     * @return string
     */
    public function getCon()
    {
        return $this->con;
    }

    /**
     * 市
     * @return string
     */
    public function getCon2()
    {
        return $this->con2;
    }

    /**
     * 区
     * @return string
     */
    public function getCon3()
    {
        return $this->con3;
    }

    /**
     * @return string
     */
    public function getCon4()
    {
        return $this->con4;
    }

    /**
     * 描述
     * @return string
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * 是否开启
     * @return mixed
     */
    public function getIsopen()
    {
        return $this->isopen;
    }

    /**
     * logo
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * SEO标题
     * @return string
     */
    public function getWebTitle()
    {
        return $this->webTitle;
    }

    /**
     * SEO关键字
     * @return string
     */
    public function getWebKeyword()
    {
        return $this->webKeyword;
    }

    /**
     * SEO描述
     * @return string
     */
    public function getWebDes()
    {
        return $this->webDes;
    }

    /**
     * 版权
     * @return string
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * 模板
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

}
