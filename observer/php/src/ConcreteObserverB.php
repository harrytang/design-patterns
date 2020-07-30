<?php
namespace DesignPatterns\Observer;
class ConcreteObserverB implements \SplObserver {
    public function update(\SplSubject $subject): void {
        if($subject->state ==0 or $subject->state >=2 ) {
            echo "ConcreteObserverB: Reacted to the event.\n";
        }
    }
}