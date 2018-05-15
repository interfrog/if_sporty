tt_content.textpic.stdWrap.override.cObject = CASE
tt_content.textpic.stdWrap.override.cObject {
  key.field = layout
  1 = FLUIDTEMPLATE
  1 {
    file = EXT:{$config.extensionDirectory}/Resources/Private/Templates/TeaserBox.html
    variables {
      header < lib.stdheader
      colorsheme = RECORDS
      colorsheme {
        tables = tx_ifthemeconfiguration_domain_model_colorsheme
        source.field = colorsheme
        dontCheckPid = 1
        conf.tx_ifthemeconfiguration_domain_model_colorsheme = TEXT
        conf.tx_ifthemeconfiguration_domain_model_colorsheme {
          field = identifier
        }
      }
    }
    dataProcessing {
      10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
      10 {
        references.fieldName = image
        references.table = tt_content
        as = images
      }
    }
  }
}
