<?php

return [
    'settings' => [
        [
            'name' => 'email_notification',
            'label' => 'Notificação por e-mail?',
            'type' => 'checkbox',
            'placeholder' => 'Notificação por e-mail',
            'value' => null,
            'required' => false
        ],
        [
            'name' => 'whatsapp_notification',
            'label' => 'Notificação por WhatsApp?',
            'type' => 'checkbox',
            'placeholder' => 'Notificação por WhatsApp',
            'value' => null,
            'required' => false
        ],
        [
            'label' => 'Receber emails de notificações',
            'name' => 'notification_emails',
            'type' => 'checkbox',
            'placeholder' => 'Receber emails de notificações',
            'value' => [1 => 'Sim', 0 => 'Não'],
            'required' => false
        ],
        [
            'label' => 'Titulo',
            'name' => 'title',
            'type' => 'text',
            'placeholder' => 'Titulo',
            'value' => NULL,
            'required' => false
        ],
        [
            'label' => 'Status Único',
            'name' => 'status',
            'type' => 'Status',
            'placeholder' => 'Status',
            'value' => NULL,
            'required' => false
        ],
        [
            'label' => 'Status',
            'name' => 'statuses',
            'type' => 'Status::multiple',
            'placeholder' => 'Status',
            'value' => NULL,
            'required' => false
        ],
        [
            'label' => 'Tarefa',
            'name' => 'task',
            'type' => 'Task',
            'placeholder' => 'Tarefa',
            'value' => NULL,
            'required' => false
        ],
        [
            'label' => 'Pessoas',
            'name' => 'users',
            'type' => 'User::multiple',
            'placeholder' => 'Pessoas',
            'value' => NULL,
            'required' => false
        ],
        [
            'label' => 'Pessoas',
            'name' => 'employees',
            'type' => 'User::multiple',
            'placeholder' => 'Pessoas',
            'value' => NULL,
            'required' => false
        ],
        [
            'label' => 'Responsaveis',
            'name' => 'responsibles',
            'type' => 'User::multiple',
            'placeholder' => 'Responsaveis',
            'value' => NULL,
            'required' => false
        ],
        [
            'label' => 'Tipo de tarefa',
            'name' => 'task_types',
            'type' => 'TaskType::multiple',
            'placeholder' => 'Tipo de tarefa',
            'value' => NULL,
            'required' => false
        ],
        [
            'label' => 'Quantidade',
            'name' => 'amount',
            'type' => 'text',
            'placeholder' => 'Quantidade',
            'value' => NULL,
            'required' => false
        ],
        [
            'label' => 'Frequencia',
            'name' => 'frequency',
            'type' => 'select',
            'placeholder' => 'Frequencia',
            'value' => ['daily' => 'Diario'],
            'required' => false
        ]
    ],
    'address' => [
        [
            'label' => 'Estado',
            'name' => 'state',
            'type' => 'text',
            'placeholder' => 'Estado',
            'value' => NULL,
            'required' => false
        ],
        [
            'label' => 'Cidade',
            'name' => 'city',
            'type' => 'text',
            'placeholder' => 'Cidade',
            'value' => NULL,
            'required' => false
        ],
    ],
    'agreement' => [
        [
            'name' => 'acronym',
            'label' => 'Sigla',
            'type' => 'text',
            'placeholder' => 'Sigla',
            'value' => NULL,
            'required' => false
        ]
    ],
    'associated' => [
        [
            'name' => 'intranet_code',
            'label' => 'Código Intranet',
            'type' => 'text',
            'placeholder' => 'Código Intranet',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'associate_indicator',
            'label' => 'Indicador do Associado',
            'type' => 'User',
            'placeholder' => 'Indicador do Associado',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'spc',
            'label' => 'Está no SPC?',
            'type' => 'checkbox',
            'placeholder' => 'SPC',
            'value' => false,
            'required' => false
        ],
    ],
    'profile' => [
        [
            'name' => 'cellphone',
            'label' => 'Celular',
            'type' => 'tel',
            'placeholder' => '(99) 9999-9999',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'comercial_phone',
            'label' => 'Telefone comercial',
            'type' => 'tel',
            'placeholder' => 'Telefone comercial',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'company',
            'label' => 'Empresa em que trabalha',
            'type' => 'text',
            'placeholder' => 'Empresa em que trabalha',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'corporate_name',
            'label' => 'Razão social',
            'type' => 'text',
            'placeholder' => 'Razão social',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'date_of_association',
            'label' => 'Data de Associação',
            'type' => 'date',
            'placeholder' => 'YYYY-MM-DD',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'date_of_birth',
            'label' => 'Data de Nascimento',
            'type' => 'date',
            'placeholder' => 'YYYY-MM-DD',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'date_of_foundation',
            'label' => 'Data de Fundação',
            'type' => 'date',
            'placeholder' => 'YYYY-MM-DD',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'gender',
            'label' => 'Genero',
            'type' => 'select',
            'placeholder' => 'Selecione o gênero',
            'value' => ['m' => 'Masculino', 'f' => 'Feminino'],
            'required' => false
        ],
        [
            'name' => 'legal_type',
            'label' => 'Tipo Jurídico',
            'type' => 'LegalType',
            'placeholder' => 'Tipo Jurídico',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'mother_name',
            'label' => 'Nome da mãe',
            'type' => 'text',
            'placeholder' => 'Nome da mãe',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'name_of_responsible',
            'label' => 'Nome do responsável',
            'type' => 'text',
            'placeholder' => 'Nome do responsável',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'nationality',
            'label' => 'Nacionalidade',
            'type' => 'Nationality',
            'placeholder' => 'Nacionalidade',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'phone',
            'label' => 'Telefone',
            'type' => 'tel',
            'placeholder' => 'Telefone',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'profession',
            'label' => 'Profissão',
            'type' => 'Profession',
            'placeholder' => 'Profissão',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'rg',
            'label' => 'RG',
            'type' => 'rg',
            'placeholder' => 'RG',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'secondary_email',
            'label' => 'E-mail secundário',
            'type' => 'email',
            'placeholder' => 'E-mail secundário',
            'value' => NULL,
            'required' => false
        ],
        [
            'name' => 'website',
            'label' => 'Website',
            'type' => 'website',
            'placeholder' => 'Website',
            'value' => NULL,
            'required' => false
        ],
    ],
    'prospect' => [
        [
            'label' => 'Oportunidade',
            'name' => 'opportunity',
            'type' => 'checkbox',
            'placeholder' => 'Oportunidade',
            'value' => NULL,
            'required' => false
        ],
        [
            'label' => 'Interesse',
            'name' => 'buying_interest',
            'type' => 'star',
            'placeholder' => 'Interesse',
            'value' => [-1, 100, 200, 300, 400, 500],
            'required' => false
        ],
        [
            'label' => 'Origem do Prospectado',
            'name' => 'prospect_origin',
            'type' => 'not_modifiable',
            'placeholder' => 'Origem do Prospectado',
            'value' => null,
            'required' => false
        ],
        [
            'label' => 'Persona (Fit)',
            'name' => 'prospect_fit',
            'type' => 'text',
            'placeholder' => 'Persona (Fit)',
            'value' => null,
            'required' => false
        ]
    ],
    'historic' => [
        [
            'label' => 'Origem do Histórico',
            'name' => 'historic_origin',
            'type' => 'text',
            'placeholder' => 'Origem do Histórico',
            'value' => null,
            'required' => false
        ]
    ],
    'widget' => [
        [
            'label' => 'Tipo de Relatório',
            'name' => 'report_type',
            'type' => 'select',
            'placeholder' => 'Tipo de Relatório',
            'value' => ['sintetico' => 'sintetico', 'analitico' => 'analitico'],
            'required' => false
        ],
        [
            'label' => 'Informações',
            'name' => 'info',
            'type' => 'select',
            'placeholder' => 'Informações',
            'value' => ['metas' => 'metas', 'vendas' => 'vendas'],
            'required' => false
        ],
    ],
    'general' => [
        [
            'label' => 'Tamanho da Coluna',
            'name' => 'col',
            'type' => 'text',
            'placeholder' => 'Tamanho da Coluna',
            'value' => 'col-6',
            'required' => false
        ],
        [
            'label' => 'Background',
            'name' => 'background',
            'type' => 'text',
            'placeholder' => 'Background',
            'value' => null,
            'required' => false
        ],
        [
            'name' => 'date',
            'label' => 'Data',
            'type' => 'date',
            'placeholder' => 'YYYY-MM-DD',
            'value' => NULL,
            'required' => false
        ],
        [
            'label' => 'Token',
            'name' => 'token',
            'type' => 'text',
            'placeholder' => 'Token',
            'value' => null,
            'required' => false
        ],
        [
            'label' => 'Descrição',
            'name' => 'description',
            'type' => 'textarea',
            'placeholder' => 'Descrição',
            'value' => null,
            'required' => false
        ],
        [
            'label' => 'Cor',
            'name' => 'color',
            'type' => 'text',
            'placeholder' => 'Cor',
            'value' => null,
            'required' => false
        ]
    ]
];
