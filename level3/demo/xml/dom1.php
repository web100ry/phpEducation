<?php
	// �������� ������� DOM
	$dom = new DOMDocument();
	
	// �������� XML-��������� � ������
	$dom->load("catalog.xml");
	
	//��������� ��������� ����
	$root = $dom->documentElement;
	
	//��� ����
	echo $root->nodeType;
	
	//��������� �������� ��������� ����
	$children = $root->childNodes;
	//var_dump($children);
?>