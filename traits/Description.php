<?php
trait Description
{
    public $text;

    /**
     * Get the value of text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     */
    public function setText($text): self
    {
        $this->text = $text;

        return $this;
    }
}


// creo il trai con i getter e i setter (SENZA CONSTRUCTOR)
// lo importo nella classe che serve 
// lo aggiungo al costruttore 