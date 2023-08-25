<?php

namespace App\Controller\Admin;

use App\Entity\PromptManagement;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PromptManagementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PromptManagement::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
