tt_content {
  # Define different wrappers for content elements depending on the page column
  stdWrap.outerWrap.cObject = COA
  stdWrap.outerWrap.cObject {
    if.isInList.field = CType
    if.value = div,shortcut
    if.negate = 1

    10 = COA
    10 {
      if.equals.field = tx_gridelements_container
      if.value = 0
      10 = COA
      10 {
        stdWrap.noTrimWrap = |<div | data-inview="false">|
        10 = COA
        10 {
          stdWrap.noTrimWrap = | class="row |"|
          10 = TEXT
          10.value = hasbackground
          10.stdWrap.noTrimWrap = | ||
          10.if.isTrue.field = backgroundimage
          20 = COA
          20 {
            if.isInList.field = tx_gridelements_backend_layout
            if.value = sitearea,fullslider
            if.negate = 1
            stdWrap.noTrimWrap = | ||
            10 = CASE
            10 {
              key.field = section_frame
              default = TEXT
              default {
                value = regularPadding
              }
              70 = TEXT
              70 {
                value = noPadding
              }
            }
          }
          30 = TEXT
          30.value = hideOnMobile
          30.stdWrap.noTrimWrap = | ||
          30.if.isTrue.field = hidemobile
          40 = TEXT
          40.value = hideOnDesktop
          40.stdWrap.noTrimWrap = | ||
          40.if.isTrue.field = hidedesktop
        }
        20 = RECORDS
        20 {
          tables = tx_ifthemeconfiguration_domain_model_colorsheme
          source.field = colorsheme
          dontCheckPid = 1
          conf.tx_ifthemeconfiguration_domain_model_colorsheme = TEXT
          conf.tx_ifthemeconfiguration_domain_model_colorsheme {
            field = identifier
            stdWrap.noTrimWrap = | data-colorsheme="|"|
          }
        }
        30 = COA
        30 {
          stdWrap.noTrimWrap = | style="|"|
          if.isTrue.field = backgroundimage
          10 = COA
          10 {
            wrap = background-image: url('|');
            10 = FILES
            10 {
              references {
                table = tt_content
                uid.data = uid
                fieldName = backgroundimage
              }
              renderObj = TEXT
              renderObj {
                data = file:current:publicUrl
              }
            }
          }
          20 = COA
          20 {
            stdWrap.noTrimWrap = |background-position:|;|
            10 = TEXT
            10.field = horizontalposition
            10.noTrimWrap = | ||
            20 = TEXT
            20.field = verticalposition
            20.noTrimWrap = | ||
          }
        }
      }
      20 = COA
      20 {
        stdWrap.noTrimWrap = |<div class="innerWrap" |>|
        10 = TEXT
        10.value = true
        10.if.isTrue.field = fullwidth
        10.stdWrap.noTrimWrap = | data-fullwidth="|"|
      }
      99 = TEXT
      99.value = |</div></div>
    }
  }
}