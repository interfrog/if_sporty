lib.asideContent = CONTENT
lib.asideContent {
  table = tt_content
  select {
    where = colPos = 2
    orderBy = sorting
    languageField = sys_language_uid
  }
  renderObj < tt_content
  renderObj.stdWrap.outerWrap >
}
