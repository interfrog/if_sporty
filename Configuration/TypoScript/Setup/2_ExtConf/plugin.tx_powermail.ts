config.tx_extbase{
  persistence{
      classes{
          In2code\Powermail\Domain\Model\Form {
              subclasses {
                  0 = Interfrog\IfSporty\Domain\Model\Form
              }
          }
          In2code\Powermail\Domain\Model\Page {
              subclasses {
                  0 = Interfrog\IfSporty\Domain\Model\Page
              }
          }
          In2code\Powermail\Domain\Model\Field {
              subclasses {
                  0 = Interfrog\IfSporty\Domain\Model\Field
              }
          }
          Interfrog\IfSporty\Domain\Model\Form {
              mapping {
                  tableName = tx_powermail_domain_model_form
              }
          }
          Interfrog\IfSporty\Domain\Model\Page {
              mapping {
                  tableName = tx_powermail_domain_model_page
              }
          }
          Interfrog\IfSporty\Domain\Model\Field {
              mapping {
                  tableName = tx_powermail_domain_model_field
              }
          }
      }
  }
  objects {
      In2code\Powermail\Domain\Repository\FormRepository.className = Interfrog\IfSporty\Domain\Repository\FormRepository
  }
}


plugin.tx_powermail {
  view {
    templateRootPaths {
      1 = {$config.pluginPath}/powermail/Templates/
    }
    layoutRootPaths {
      1 = {$config.pluginPath}/powermail/Layouts/
    }
    partialRootPaths {
      1 = {$config.pluginPath}/powermail/Partials/
    }
  }
}

#remove all Powermail-Javascript
page.includeJSFooterlibs {
	powermailJQuery >
	powermailJQueryUi >
	powermailJQueryUiDatepicker >
	powermailJQueryFormValidationLanguage >
	powermailJQueryFormValidation >
	powermailJQueryTabs >
	powermailForm >
	powermail_frontend >
}