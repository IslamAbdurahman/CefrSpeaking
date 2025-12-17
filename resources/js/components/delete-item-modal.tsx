import { Button } from '@/components/ui/button';
import {
    Dialog,
    DialogClose,
    DialogContent,
    DialogFooter,
    DialogTitle,
    DialogDescription
} from '@/components/ui/dialog';
import { useTranslation } from 'react-i18next';
import { TrashIcon } from 'lucide-react';
import React from 'react';

interface DeleteItemModalProps {
    item: { id: number, name?: string };
    onDelete: (id: number) => void; // Callback function to handle deletion
}

export default function DeleteItemModal({ item, onDelete }: DeleteItemModalProps) {
    const { t } = useTranslation();

    const [open, setOpen] = React.useState(false);

    const handleDelete = () => {
        onDelete(item.id); // Call the onDelete function passed as a prop
        setOpen(false); // Close the modal
    };

    const handleDeleteClick = () => {
        setOpen(true); // Open the delete modal
    };

    return (
        <>
            <button
                onClick={() => handleDeleteClick()}
                className="bg-red-500 px-4 py-2 text-sm font-medium text-white-700 border-t border-b border-gray-400 hover:text-black hover:bg-gray-100 focus:z-10 rounded-r-md"
            >
                <TrashIcon className="w-4 h-4" />
            </button>

            <Dialog open={open} onOpenChange={setOpen}>
                <DialogContent>
                    <DialogTitle>{t('modal.delete_title')}</DialogTitle>
                    <DialogDescription>
                        <p>{t('modal.delete_confirmation')}</p>
                        <p>{t('delete')} {item.name}</p>
                    </DialogDescription>

                    <DialogFooter className="gap-2">
                        <DialogClose asChild>
                            <Button variant="secondary" onClick={() => setOpen(false)}>
                                {t('cancel')}
                            </Button>
                        </DialogClose>
                        <Button variant="destructive" onClick={handleDelete}>
                            {t('delete')}
                        </Button>
                    </DialogFooter>
                </DialogContent>
            </Dialog>
        </>

    );
}
