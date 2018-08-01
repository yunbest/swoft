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
 * 网站初始化内容分组表

 * @Entity()
 * @Table(name="pay_web_con_group")
 * @uses      PayWebConGroup
 */
class PayWebConGroup extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $title 标题
     * @Column(name="title", type="string", length=60)
     */
    private $title;

    /**
     * @var string $lang 语言
     * @Column(name="lang", type="string", length=5)
     */
    private $lang;

    /**
     * @var int $sort 排序
     * @Column(name="sort", type="smallint", default=0)
     */
    private $sort;

    /**
     * @var string $logo logo
     * @Column(name="logo", type="string", length=100)
     */
    private $logo;

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
     * 排序
     * @param int $value
     * @return $this
     */
    public function setSort(int $value): self
    {
        $this->sort = $value;

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
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
     * 语言
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * 排序
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * logo
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

}
