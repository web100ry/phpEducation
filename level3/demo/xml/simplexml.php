<?php
	// ������� ������, ��������� � ���� ��������
	$sxml = simplexml_load_file("catalog.xml");
	
	//  ����� �������� 1-� �����
	echo $sxml->book[0]->title;
?>