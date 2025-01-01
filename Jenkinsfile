pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                // Клонируем репозиторий
                git branch: 'main', url: 'https://github.com/joni7937/simma-fit-.git'
            }
        }
        stage('Build') {
            steps {
                // Просто выводим сообщение, чтобы убедиться, что пайплайн работает
                echo "Repo successfully cloned!"
            }
        }
    }
}
