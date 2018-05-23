<?php

class AdmiringComment extends ObjectModel
{
    const TABLE = "admiring_comment";

    /** @var integer $id_admiring_comment */
    public $id_admiring_comment;

    /** @var integer $id_product */
    public $id_product;

    /** @var integer $grade */
    public $grade;

    /** @var string $comment */
    public $comment;

    /** @var mixed $date_add */
    public $date_add;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = [
        'table' => self::TABLE,
        'primary' => 'id_admiring_comment',
        'multilang' => false,
        'fields' => [
            'id_product' => ['type' => self::TYPE_INT],
            'grade' => ['type' => self::TYPE_INT],
            'comment' => ['type' => self::TYPE_STRING],
            'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDateFormat'],
        ]
    ];

    /**
     * @return DbQuery
     */
    private static function getQueryBuilder()
    {
        $queryBuilder = new DbQuery();
        $queryBuilder->select('*');
        $queryBuilder->from(self::TABLE);

        return $queryBuilder;
    }

    /**
     * @return array
     */
    public static function findAll()
    {
        $queryBuilder= self::getQueryBuilder();
        $queryBuilder->orderBy('date_add DESC');

        return array_map(function (array $data) {
            return self::init($data);
        }, Db::getInstance()->executeS($queryBuilder));
    }

    /**
     * @param int $limit
     * @return array
     */
    public static function findByLimit($limit = 3)
    {
        $queryBuilder= self::getQueryBuilder();
        $queryBuilder->limit($limit);

        return array_map(function (array $data) {
            return self::init($data);
        }, Db::getInstance()->executeS($queryBuilder));
    }

    /**
     * @param array $data
     * @return AdmiringComment
     */
    public static function init(array $data)
    {
        $admiringComment = new self();
        $admiringComment->id_admiring_comment = $data['id_admiring_comment'];
        $admiringComment->id_product = $data['id_product'];
        $admiringComment->grade = $data['grade'];
        $admiringComment->comment = $data['comment'];
        $admiringComment->date_add = $data['date_add'];

        return $admiringComment;
    }

}