<?php 

function getLoginRules(){
    return array(
        array(
            'field' => 'email',
            'label' => 'Correo',
            'rules' => 'required|trim',
            'error' => array(
                // !el simbolo %s automaticamente adquiere el valor dado en label.
                'required' => 'El %s es requerido.',
            ),
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim',
            'error' => array(
                // !el simbolo %s automaticamente adquiere el valor dado en label.
                'required' => 'El %s es requerido.',
            ),
        ),
    );
}

?>