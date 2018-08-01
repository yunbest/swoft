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
 * 关键词表

 * @Entity()
 * @Table(name="mallbuilder_search_word")
 * @uses      MallbuilderSearchWord
 */
class MallbuilderSearchWord extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $keyword ID
     * @Column(name="keyword", type="string", length=80)
     */
    private $keyword;

    /**
     * @var string $charIndex 拼音
     * @Column(name="char_index", type="string", length=80)
     */
    private $charIndex;

    /**
     * @var int $nums 点击率
     * @Column(name="nums", type="integer", default=0)
     */
    private $nums;

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
     * ID
     * @param string $value
     * @return $this
     */
    public function setKeyword(string $value): self
    {
        $this->keyword = $value;

        return $this;
    }

    /**
     * 拼音
     * @param string $value
     * @return $this
     */
    public function setCharIndex(string $value): self
    {
        $this->charIndex = $value;

        return $this;
    }

    /**
     * 点击率
     * @param int $value
     * @return $this
     */
    public function setNums(int $value): self
    {
        $this->nums = $value;

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
     * ID
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * 拼音
     * @return string
     */
    public function getCharIndex()
    {
        return $this->charIndex;
    }

    /**
     * 点击率
     * @return int
     */
    public function getNums()
    {
        return $this->nums;
    }

}
