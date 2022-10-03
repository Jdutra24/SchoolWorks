<?php

class Fotografo implements Databaseable
{
    use WithDatabaseable;

    protected $idfotografo;
    protected $nome;
    protected $idade;
    protected $nacionalidade;
    protected $codpais;
    protected $telemovel;
    protected $nif;
    protected $morada;
    protected $datainicioagencia;
    protected $datafimagencia;


    public function __construct(array $parameters)
    {
        $properties = array_keys(get_class_vars(get_class()));
        foreach ($parameters as $key => $parameter) {
            if (in_array($key, $properties)) {
                $this->{$key} = $parameter;
            }
        }
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->idfotografo;
    }



    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }
    
    /**
     * Get the value of nacionalidade
     */ 
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set the value of nacionalidade
     *
     * @return  self
     */ 
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }
    
    /**
     * Get the value of codPais
     */ 
    public function getCodPais()
    {
        return $this->codpais;
    }

    /**
     * Set the value of codPais
     *
     * @return  self
     */ 
    public function setCodPais($codpais)
    {
        $this->codpais = $codpais;

        return $this;
    }

    /**
     * Get the value of telemovel
     */ 
    public function getTelemovel()
    {
        return $this->telemovel;
    }

    /**
     * Set the value of telemovel
     *
     * @return  self
     */ 
    public function setTelemovel($telemovel)
    {
        $this->telemovel = $telemovel;

        return $this;
    }

    /**
     * Get the value of nif
     */ 
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set the value of nif
     *
     * @return  self
     */ 
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * Get the value of morada
     */ 
    public function getMorada()
    {
        return $this->morada;
    }

    /**
     * Set the value of morada
     *
     * @return  self
     */ 
    public function setMorada($morada)
    {
        $this->morada = $morada;

        return $this;
    }

    /**
     * Get the value of dataInicioAgencia
     */ 
    public function getDataInicioAgencia()
    {
        return $this->datainicioagencia;
    }

    /**
     * Set the value of dataInicioAgencia
     *
     * @return  self
     */ 
    public function setDataInicioAgencia($datainicioagencia)
    {
        $this->datainicioagencia = $datainicioagencia;

        return $this;
    } 

    /**
     * Get the value of dataFimAgencia
     */ 
    public function getDataFimAgencia()
    {
        return $this->datafimagencia;
    }

    /**
     * Set the value of dataFimAgencia
     *
     * @return  self
     */ 
    public function setDataFimAgencia($datafimagencia)
    {
        $this->datafimagencia = $datafimagencia;

        return $this;
    }
}