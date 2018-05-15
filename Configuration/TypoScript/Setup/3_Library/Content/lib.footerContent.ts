lib.footerContent = CONTENT
lib.footerContent {
  table = tt_content
  select {
    where = colPos = 10
    orderBy = sorting
    languageField = sys_language_uid
    pidInList.data = leveluid:0
  }
  renderObj < tt_content
  renderObj.stdWrap.outerWrap >
}