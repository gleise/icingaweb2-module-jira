<?php

/** @var \Icinga\Application\Modules\Module $this */
$section = $this->menuSection(N_('Jira'))
    ->setUrl('jira/issues')
    ->setPriority(63)
    ->setIcon('tasks');
$section->add(N_('Issues'))->setUrl('jira/issues');
$section->add(N_('Configuration'))
    ->setUrl('jira/configuration')
    ->setPermission('director/admin');
$this->providePermission('jira/issue/create', $this->translate('Allow to manually create issues'));
