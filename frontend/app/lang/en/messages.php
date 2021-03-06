<?php

return array(

	'account_creation_failed' => 'Could not create account.',
	'account_update_failed' => 'Could not update account.',
	'invalid_credentials' => 'Your credentials are invalid.',
	'note_version_info' => 'You are previewing an older version of this note.',
	'found_bug' => 'Found a bug? <a href="https://github.com/twostairs/paperwork/issues/new" target="_blank" title="Submit Issue">Submit it on GitHub!</a>',
	'error_message' => 'Whooops!',
	'onbeforeunload_info' => 'Data will be lost if you leave the page, are you sure?',
	'user' => array(
		'settings' => array(
			'language_label' => 'Language',
			'client_label' => 'Client',
			'import_slash_export' => 'Import/Export',
			'language' => array(
				'ui_language' => 'User Interface Language',
				'document_languages' => 'Document Languages',
				'document_languages_description' => 'The languages you select here will be used for parsing text within attachments you upload, allowing you to search for the content of these. An attachment could be a photo of a document you took with your smartphone, for example. Select the languages these documents are usually written in.',
			),
			'client' => array(
				'qrcode' => 'QR Code',
				'scan' => 'Scan this QR code with your mobile app to auto-configure your Paperwork account.'
			),
			'import' => array(
				'evernotexml' => 'Evernote XML:',
				'upload_evernotexml' => 'Upload your Evernote XML export here, to import your Evernote notes into Paperwork.'
			),
			'export' => array(
				'evernotexml' => 'Export as Evernote XML:',
				'download_evernotexml' => 'Download an ENEX file compatible with Evernote to move your notes from Paperwork. '
			)
		)
	)
);
