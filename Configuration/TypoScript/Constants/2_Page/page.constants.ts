config {

  additionalPageTitle = ifPage Sporty
  copyright = Copyright © Interfrog Produktion GmbH

  #Insert new extension path
  extensionDirectory = if_sporty

  jsPath = EXT:{$config.extensionDirectory}/Resources/Public/Scripts
  absoluteJsPath = typo3conf/ext/{$config.extensionDirectory}/Resources/Public/Scripts
  cssPath = EXT:{$config.extensionDirectory}/Resources/Public/Styles
  htmlPath = EXT:{$config.extensionDirectory}/Resources/Public
  imagePath = EXT:{$config.extensionDirectory}/Resources/Public/Assets
  absoluteImagePath = typo3conf/ext/{$config.extensionDirectory}/Resources/Public/Images
  demoPath = EXT:{$config.extensionDirectory}/Resources/Public
  pluginPath = EXT:{$config.extensionDirectory}/Plugins
  fluidPath = EXT:{$config.extensionDirectory}/Resources/Private/

  jsPathBase = EXT:{$config.extensionDirectory}/Resources/Public/Scripts
  cssPathBase = EXT:{$config.extensionDirectory}/Resources/Public/Styles

  #Footer Navigation mainly used for SEO reasons
  footerNavigationPid = 3
  googleAnalyticsCode = 0
}
