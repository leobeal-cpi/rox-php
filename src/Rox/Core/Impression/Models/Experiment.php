<?php

namespace Rox\Core\Impression\Models;

use ArrayObject;
use Rox\Core\Configuration\Models\ExperimentModel;

class Experiment
{
    /**
     * @var string $_name
     */
    private $_name;

    /**
     * @var string $_identifier
     */
    private $_identifier;


    /**
     * @var bool $_archived
     */
    private $_archived;

    /**
     * @var string[] $_labels
     */
    private $_labels;

    /**
     * Experiment constructor.
     * @param ExperimentModel $experiment
     */
    public function __construct($experiment)
    {
        $this->_name = $experiment->getName();
        $this->_identifier = $experiment->getId();
        $this->_archived = $experiment->isArchived();
        $this->_labels = (new ArrayObject($experiment->getLabels()))->getArrayCopy();
    }


}