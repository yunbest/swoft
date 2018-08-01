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
 * 随机问题表

 * @Entity()
 * @Table(name="mallbuilder_reg_vercode")
 * @uses      MallbuilderRegVercode
 */
class MallbuilderRegVercode extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $question 问题
     * @Column(name="question", type="string", length=50)
     */
    private $question;

    /**
     * @var string $answer 问题
     * @Column(name="answer", type="string", length=40)
     */
    private $answer;

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
     * 问题
     * @param string $value
     * @return $this
     */
    public function setQuestion(string $value): self
    {
        $this->question = $value;

        return $this;
    }

    /**
     * 问题
     * @param string $value
     * @return $this
     */
    public function setAnswer(string $value): self
    {
        $this->answer = $value;

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
     * 问题
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * 问题
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

}
