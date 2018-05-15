config.tx_extbase {
    persistence {
        classes {
            Interfrog\IfThemeconfiguration\Domain\Model\ThemeConfiguration {
                subclasses {
                    if_sporty = Interfrog\IfSporty\Domain\Model\ThemeConfiguration
                }
            }

            Interfrog\IfSporty\Domain\Model\ThemeConfiguration {
                mapping {
                    recordType = if_sporty
                    tableName = tx_ifthemeconfiguration_domain_model_themeconfiguration
                }
            }

            Interfrog\IfThemeconfiguration\Domain\Model\Colorsheme {
                subclasses {
                    0 = Interfrog\IfSporty\Domain\Model\Colorsheme
                }
            }

            Interfrog\IfSporty\Domain\Model\Colorsheme {
                mapping {
                    recordType = 0
                    tableName = tx_ifthemeconfiguration_domain_model_colorsheme
                }
            }
        }
    }
}
