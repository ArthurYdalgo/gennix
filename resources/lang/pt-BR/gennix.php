<?php

    return [
        // General messages
        'access_with_social'    => 'Ou utilize as redes sociais para acessar',
        'or'                    => 'ou',
        'and'                   => 'e',
        'user_not_exists'       => 'Este usuário não existe no sistema.',
        'user_not_active'       => 'Este usuário não está ativo no sistema.',
        'fail_login_social'     => 'Ocorreu uma falha na autenticação pelo ',
        'login'                 => 'Fez login no sistema.',
        'social_login'          => 'Fez login no sistema pelo ',
        'logout'                => 'Fez logout no sistema.',
        'yes'                   => 'Sim',
        'no'                    => 'Não',
        "all"                   => 'Todos',
        "opps"                  => "Opps!",
        "no_selected_rows"      => "Você não selecionou nenhum item.",
        "understood"            => "Entendi!",
        'operations'            => 'Operações',
        'back'                  => 'Voltar',
        'undefined'             => 'Indefinido',
        'save'                  => 'Gravar',
        'superadmin'            => 'Super Admin',
        'today_is'              => 'Hoje é ',
        'optional'              => '(opcional)',

        // Breadcrumbs
        'breadcrumbs'           => [
            'dashboard'         => 'Dashboard',
            'activity'          => 'Atividades',
            'permission'        => 'Permissões',
            'role'              => 'Papéis',
            'user'              => 'Usuários',
            'details'           => 'Detalhes',
            'create'            => 'Inserir',
            'edit'              => 'Edição',
            'password'          => 'Alteração da Senha',
        ],

        // widgets
        'widgets'               => [
            'users_actives'     => 'Usuários Ativos',
            'permissions'       => 'Permissões',
            'roles'             => 'Papéis',
            'errors'            => 'Erros/Falhas',
        ],

        // Dashboard screen
        'dashboard'             => [
            'view_title'        => 'Dashboard',
            'view_hello'        => 'Olá ',
            'view_wellcome'     => 'Bem vindo!',
        ],

        // Activity screen
        'model_activity'        => [
            'view_title'        => 'Atividades',
            'id'                => '#',
            'user'              => 'Usuário',
            'title'             => 'Atividade/Evento',
            'read'              => 'Lido?',
            'when'              => 'Quando',
            'actions'           => 'Ações',
            'mark_all_read'     => 'Marcar selecionados como lidas',
            'mark_all_unread'   => 'Marcar selecionados como não lidas',
            'delete_selected'   => 'Excluir itens selecionados',
            'update_screen'     => 'Atualizar a tela',
            'insert_new'        => 'Inserir',
            'confirm_action'    => 'Confirma a execução desta ação ?',
            'confirm_text'      => 'Esta ação mudará os status de todas as atividades selecionadas',
            'exclude_confirm'   => 'ATENÇÃO: Esta ação não poderá ser desfeita.',
            'yes'               => 'Execute a ação',
            'no'                => 'Cancelar a ação',
            'success'           => 'Sucesso',
            'failed'            => 'Opps!',
            'fields_changed'    => 'Os registros selecionados foram processados.',
            'failed_text'       => 'Houve um problema que impediu a execução desta ação.',
            'canceled'          => 'Cancelado',
            'more_details'      => 'Detalhes',
            'exclude_record'    => 'Excluir Registro',
            'details_id'        => 'ID',
            'details_username'  => 'Usuário',
            'details_isread'    => 'Já foi lido?',
            'details_url'       => 'URL',
            'details_useragent' => 'User Agent',
            'details_title'     => 'Atividade/Evento',
            'details_ipaddress' => 'IP Interno',
            'details_externalip'=> 'IP Externo',
            'details_created_at'=> 'Quando Ocorreu',
            'details_updated_at'=> 'Atualizado em',
            'details_details'   => 'Detalhes',
            'details_type'      => 'Tipo',
            'success'           => 'Sucesso',
            'info'              => 'Informação',
            'error'             => 'Erro',
            'warning'           => 'Atenção',
            'undefined'         => 'Indefinido',
            'is_read'           => 'LIDA',
            'is_unread'         => 'NÃO LIDA',

            'alert_messages'    => [
                'destroy_success'           => 'A atividade foi excluída com sucesso.',
                'destroy_error'             => 'Ocorreu um erro e a atividade não pode ser excluída',

                'is_read_success'           => 'Atividades alteradas com sucesso para o status ',
                'is_read_error'             => 'Ocorreu um erro e algumas atividades não foram alteradas.',

                'deletemass_success'        => 'Atividades excluídas com sucesso.',
                'deletemass_error'          => 'Ocorreu um erro e algumas atividades não foram excluídas.'
            ],
        ],

        'model_permission' => [
            'view_title'        => 'Permissões',
            'insert_new'        => 'Inserir',
            'id'                => '#',
            'title'             => 'Descrição',
            'slug'              => 'Slug',
            'roles'             => 'Papéis',
            'actions'           => 'Ações',
            'update_screen'     => 'Atualizar a tela',
            'more_details'      => 'Detalhes',
            'exclude_record'    => 'Excluir Registro',
            'confirm_action'    => 'Confirma a execução desta ação ?',
            'confirm_text'      => 'Esta ação não poderá ser desfeita',
            'exclude_confirm'   => 'ATENÇÃO: Esta ação não poderá ser desfeita.',
            'yes'               => 'Execute a ação',
            'no'                => 'Cancelar a ação',
            'success'           => 'Sucesso',
            'failed'            => 'Opps!',
            'excluded_record'   => 'A permissão foi excluída com sucesso.',
            'failed_text'       => 'Houve um problema que impediu a execução desta ação.',
            'canceled'          => 'Cancelado',
            'edit'              => 'Alterar Dados',
            'details_id'        => 'ID',
            'details_title'     => 'Descrição',
            'details_slug'      => 'Slug',
            'details_created_at'=> 'Criado em',
            'details_updated_at'=> 'Atualizado em',
            'zero_roles'        => 'nenhum papel atribuído',
            'one_role'          => 'papel atribuído',
            'more_roles'        => 'papéis atribuídos',
            'request_title'     => 'Forneça o título da permissão',
            'request_slug'      => 'Forneça o slug para esta permissão',

            'alert_messages'    => [
                'store_success'             => 'Permissão cadastrada com sucesso',
                'store_error'               => 'Ocorreu um erro e a permissão não pode ser cadastrada.',

                'update_success'             => 'Permissão alterada com sucesso',
                'update_error'               => 'Ocorreu um erro e a permissão não pode ser alterada.',

                'destroy_success'           => 'A permissão foi excluída com sucesso.',
                'destroy_error'             => 'Ocorreu um erro e a permissão não pode ser excluída',
            ],
        ],

        'model_role' => [
            'view_title'        => 'Papéis',
            'insert_new'        => 'Inserir',
            'id'                => '#',
            'title'             => 'Descrição',
            'permissions'       => 'Permissões',
            'users'             => 'Usuários',
            'actions'           => 'Ações',
            'update_screen'     => 'Atualizar a tela',
            'more_details'      => 'Detalhes',
            'exclude_record'    => 'Excluir Registro',
            'confirm_action'    => 'Confirma a execução desta ação ?',
            'confirm_text'      => 'Esta ação não poderá ser desfeita',
            'exclude_confirm'   => 'ATENÇÃO: Esta ação não poderá ser desfeita.',
            'yes'               => 'Execute a ação',
            'no'                => 'Cancelar a ação',
            'success'           => 'Sucesso',
            'failed'            => 'Opps!',
            'excluded_record'   => 'O papel foi excluído com sucesso.',
            'failed_text'       => 'Houve um problema que impediu a execução desta ação.',
            'canceled'          => 'Cancelado',
            'edit'              => 'Alterar Dados',
            'details_id'        => 'ID',
            'details_title'     => 'Descrição do Papel',
            'details_created_at'=> 'Criado em',
            'details_updated_at'=> 'Atualizado em',
            'details_users'     => 'Usuários com este papel',
            'zero_permissions'  => 'nenhuma permissão atribuída',
            'one_permission'    => 'permissão atribuída',
            'more_permissions'  => 'permissões atribuídas',
            'zero_users'        => 'nenhum usuário atribuído',
            'one_user'          => 'usuário atribuído',
            'more_users'        => 'usuários atribuídos',
            'select_all'        => 'Selecionar Todas',
            'unselect_all'      => 'Desmarcar Todas',
            'select_one'        => 'Selecione pelo menos uma permissão.',
            'request_title'     => 'Forneça uma descrição para este papel',
            'request_permissions'=> 'Escolha pelo menos uma permissão da lista',
            'clone_role'        => 'Clonar Papel',

            'alert_messages'    => [
                'store_success'             => 'Papel cadastrado com sucesso',
                'store_error'               => 'Ocorreu um erro e o papel não pode ser cadastrado.',

                'update_success'             => 'Papel alterado com sucesso',
                'update_error'               => 'Ocorreu um erro e o papel não pode ser alterado.',

                'destroy_success'           => 'O papel foi excluído com sucesso.',
                'destroy_error'             => 'Ocorreu um erro e o papel não pode ser excluído',

                'clone_success'             => 'O papel foi clonado com sucesso.',
                'clone_error'               => 'Ocorreu um erro e o papel não pode ser clonado',
            ],
        ],

        'model_user' => [
            'view_title'        => 'Usuários',
            'insert_new'        => 'Inserir',
            'id'                => '#',
            'name'              => 'Nome do Usuário',
            'email'             => 'E-mail',
            'active'            => 'Ativo?',
            'is_superadmin'     => 'Super Admin?',
            'role'              => 'Papel',
            'actions'           => 'Ações',
            'update_screen'     => 'Atualizar a tela',
            'more_details'      => 'Detalhes',
            'exclude_record'    => 'Excluir Registro',
            'activated'         => 'Ativar Usuário',
            'deactivated'       => 'Desativar Usuário',
            'confirm_action'    => 'Confirma a execução desta ação ?',
            'confirm_text'      => 'Esta ação não poderá ser desfeita',
            'yes'               => 'Execute a ação',
            'no'                => 'Cancelar a ação',
            'success'           => 'Sucesso',
            'failed'            => 'Opps!',
            'excluded_record'   => 'O papel foi excluído com sucesso.',
            'failed_text'       => 'Houve um problema que impediu a execução desta ação.',
            'canceled'          => 'Cancelado',
            'edit'              => 'Alterar Dados',
            'details_id'        => 'ID',
            'details_name'      => 'Nome do Usuário',
            'details_email'     => 'E-mail',
            'details_active'    => 'Ativo?',
            'details_is_superadmin' => 'Super Admin?',
            'details_gender'    => 'Sexo',
            'details_position'  => 'Função',
            'details_roles'     => 'Papel',
            'details_created_at'=> 'Criado em',
            'details_updated_at'=> 'Atualizado em',
            'details_gender_male'=> 'Masculino',
            'details_gender_femme' => 'Feminino',
            'details_gender_undefined' => 'Não definido',
            'details_password'   => 'Senha',
            'details_last_login' => 'Último Login',
            'superadmin_role'   => 'Super Admin',
            'zero_roles'        => 'nenhum papel atribuído',
            'one_role'          => 'papel atribuído',
            'more_roles'        => 'papéis atribuídos',
            'zero_users'        => 'nenhum usuário atribuído',
            'one_user'          => 'usuário atribuído',
            'more_users'        => 'usuários atribuídos',
            'select_all'        => 'Selecionar Todas',
            'unselect_all'      => 'Desmarcar Todas',
            'select_one'        => 'Selecione uma das opções.',
            'request_title'     => 'Forneça uma descrição para este papel',
            'request_permissions'=> 'Escolha pelo menos uma permissão da lista',
            'avatar'            => 'Foto',
            'new_photo'         => 'Nova Foto',
            'profile'           => 'Perfil',
            'my_profile'        => 'Meu Perfil',
            'retype_password'   => 'Redigite a Nova Senha',
            'change_password'   => 'Mudar a Senha',
            'leave_blank'       => 'Para não alterar a senha, deixe o campo em branco.',
            'avatar_format'     => 'Use imagens com tamanho de 140px no formato .jpg',
            'new_password'      => 'Nova Senha',

            'alert_messages'    => [
                'store_success'             => 'Usuário cadastrado com sucesso',
                'store_error'               => 'Ocorreu um erro e o usuário não pode ser cadastrado.',

                'update_success'             => 'Usuário alterado com sucesso',
                'update_error'               => 'Ocorreu um erro e o usuário não pode ser alterado.',

                'destroy_success'           => 'O usuário foi excluído com sucesso.',
                'destroy_error'             => 'Ocorreu um erro e o usuário não pode ser excluído',

                'profile_success'           => 'Perfil atualizado com sucesso.',
                'profile_error'             => 'Ocorreu um erro e o perfil do usuário não foi alterado.',

                'active_success'            => 'Usuário ativado com sucesso.',
                'active_error'              => 'Ocorreu um erro e o usuário não foi ativado.',

                'deactive_success'          => 'Usuário desativado com sucesso.',
                'deactive_error'            => 'Ocorreu um erro e o usuário não foi desativado.',

                'avatar_success'            => 'Foto atualizada com sucesso.',
                'avatar_error'              => 'Ocorreu um erro e a foto do usuário não foi atualizada. ',

                'password_success'          => 'Senha atualizada com sucesso.',
                'password_error'            => 'Ocorreu um erro e a senha não foi atualizada.',

            ],

        ],
    ];
