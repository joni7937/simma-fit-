pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/joni7937/simma-fit-.git'
            }
        }
        stage('Build Docker Image') {
            steps {
                script {
                    dockerImage = docker.build("simma-fit", ".") // Указываем контекст сборки (текущая директория)
                }
            }
        }
        stage('Test') {
            steps {
                script {
                    // Запуск тестов через phpunit в контейнере
                    sh 'docker run --rm simma-fit php vendor/bin/phpunit'
                }
            }
        }
        stage('Deploy') {
            steps {
                script {
                    // Запуск контейнера для деплоя
                    sh 'docker run -d -p 80:80 simma-fit'
                }
            }
        }
    }
}
