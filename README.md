
# laravel_Todo

	�؃g�����w�юn�߂����w�҂�
	�����̍D���ȕ��ʂ�b������

	��ɃX�P�W���[�������邱�Ƃ�
	���Ȏ�ڂ��܂߁A�S�g�̋؃g���𑣂�
	�؃g���ptodo�A�v���ɂȂ�܂��B

## Dependency

	PHP 8.1.1
	Laravel sail  8.1

## Setup

	1.�K�v�ȃ\�t�g�̃C���X�g�[��
		�ELaravel Sail
		  https://readouble.com/laravel/8.x/ja/sail.html
		�EDocker
		  https://www.docker.com/products/docker-desktop
		
	2.Github�A�J�E���g�̍쐬
		�EGithub HP
		  https://github.co.jp/
		�E�Q�l�ɂ����T�C�g
		  https://qiita.com/ayatokura/items/9eabb7ae20752e6dc79d
		  
	Github ����C���X�g�[������ꍇ
		vendor�t�@�C����.env�t�@�C���̍쐬���K�v
		�R�}���h�v�����v�g���g�p(Mac�̓^�[�~�i��)
		todo�A�v���̃f�B���N�g������ 
		
		composer install	
		
		vendor�t�@�C�����쐬���ꂽ��
		.env�t�@�C���̐ݒ�
		���炩���ߗp�ӂ���Ă��� .env.example��
		.env�Ƀ��l�[���BDB�̂Ȃǂ̐ݒ���s���B
		
		./vendor/bin/sail up  
		
		docker�N����
		
		php artisan migrate:refresh --seed
		
		DB�Ƀf�[�^�x�[�X�̍쐬���s���B
		
		URL�L������
		
		localhost  
		
		�L���ŃA�v���N��
		

## Usage

�܂��͋؃g�����s�����t�̓o�^���s������
�����̃J�����_�[������t��I�����V�K�v���W�F�N�g�쐬

���ɉE���̐V�K�^�X�N�̍쐬���s��
�W�������ƃ^�X�N���͕K�{

�^�X�N���ɂ͎�ږ����L������Ƃ킩��₷���B
��j�r���ĕ����A�_���x���t���C15kg�A�x���`�v���X80kg��

�񐔂ƃZ�b�g���A�S����Ԃ�R���f�B�V�����͖��L���ł���
�Z�b�g����񐔂����܂��Ă��Ȃ��ꍇ�͕ҏW�{�^���Ōォ��X�V�\




## License
Copyright (c) 2021 Toyama Hideki

Permission is hereby granted, free of charge, to any person obtaining a 
copy of this software and associated documentation files (the 
"Software"), to deal in the Software without restriction, including 
without limitation the rights to use, copy, modify, merge, publish, 
distribute, sublicense, and/or sell copies of the Software, and to 
permit persons to whom the Software is furnished to do so, subject to 
the following conditions:

The above copyright notice and this permission notice shall be 
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, 
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF 
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND 
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE 
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION 
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION 
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

## Authors

	Toyama Hideki
 
## References

	https://readouble.com/laravel/8.x/ja/installation.html

