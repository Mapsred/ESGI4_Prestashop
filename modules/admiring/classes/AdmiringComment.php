<?php

class AdmiringComment extends ObjectModel
{
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
        'table' => 'admiring_comment',
        'primary' => 'id_admiring_comment',
        'multilang' => false,
        'fields' => [
            'id_product' => ['type' => self::TYPE_INT],
            'grade' => ['type' => self::TYPE_INT],
            'comment' => ['type' => self::TYPE_STRING],
            'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDateFormat'],
        ]
    ];
}