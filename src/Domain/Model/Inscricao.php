<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario12
 * Date: 02/06/2018
 * Time: 14:16
 */

namespace Domain\Model;


class Inscricao
{
    /**
     * @var int
     */
    private $idInscricao;

    /**
     * @var Candidato
     */
    private $candidato;

    /**
     * @var Oportunidade
     */
    private $oportunidade;

    /**
     * @var string
     */
    private $condigoConfirmacao;

    /**
     * @var boolean
     */
    private $ativa;
}